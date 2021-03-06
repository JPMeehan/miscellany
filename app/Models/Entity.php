<?php

namespace App\Models;

use App\Facades\EntityCache;
use App\Facades\Img;
use App\Facades\Mentions;
use App\Models\Concerns\Picture;
use App\Models\Concerns\Searchable;
use App\Models\Concerns\SimpleSortableTrait;
use App\Models\Relations\EntityRelations;
use App\Models\Scopes\EntityScopes;
use App\Traits\CampaignTrait;
use App\Traits\EntityAclTrait;
use App\Traits\TooltipTrait;
use App\User;
use Illuminate\Database\Eloquent\Model;
use DateTime;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RichanFongdasen\EloquentBlameable\BlameableTrait;

/**
 * Class Entity
 * @package App\Models
 *
 * @property integer $id
 * @property integer $entity_id
 * @property integer $campaign_id
 * @property string $name
 * @property string $type
 * @property integer $created_by
 * @property integer $updated_by
 * @property boolean $is_private
 * @property boolean $is_attributes_private
 * @property string $tooltip
 * @property string $header_image
 * @property Conversation $conversation
 * @property Tag[] $tags
 * @property EntityTag[] $entityTags
 * @property EntityNote[] $notes
 * @property EntityMention[] $mentions
 * @property Inventory[] $inventories
 * @property EntityMention[] $targetMentions
 * @property EntityAbility[] $abilities
 * @property CampaignDashboardWidget[] $widgets
 * @property MiscModel $child
 * @property User $updater
 * @property Campaign $campaign
 */
class Entity extends Model
{
    const TYPE_LOCATION = 'location';

    /**
     * @var array
     */
    protected $fillable = [
        'campaign_id',
        'entity_id',
        'name',
        'type',
        'is_private',
        'is_attributes_private',
        'header_image',
    ];

    /**
     * Traits
     */
    use CampaignTrait,
        EntityRelations,
        BlameableTrait,
        EntityAclTrait,
        EntityScopes,
        Searchable,
        TooltipTrait,
        Picture,
        SimpleSortableTrait,
        SoftDeletes;

    /**
     * Searchable fields
     * @var array
     */
    protected $searchableColumns = [
        'name'
    ];

    /**
     * Array of our custom model events declared under model property $observables
     * @var array
     */
    protected $observables = [
        'crudSaved',
    ];

    /**
     * True if the user granted themselves permission to read/write when creating the entity
     * @var bool
     */
    public $permissionGrantSelf = false;

    /**
     * Get the child entity
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function child()
    {
        if ($this->type == 'attribute_template') {
            return $this->attributeTemplate();
        } elseif ($this->type == 'dice_roll') {
            return $this->diceRoll();
        } else {
            return $this->{$this->type}();
        }
    }

    /**
     * Child attribute
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getChildAttribute()
    {
        return EntityCache::child($this);
    }

    /**
     * @return Entity
     */
    public function reloadChild()
    {
        if ($this->type == 'attribute_template') {
            return $this->load('attributeTemplate');
        } elseif ($this->type == 'dice_roll') {
            return $this->load('diceRoll');
        }

        return $this->load($this->type);
    }

    /**
     * Fire an event to the observer to know that the entity was saved from the crud
     */
    public function crudSaved()
    {
        $this->fireModelEvent('crudSaved', false);
    }

    /**
     * Create a short name for the interface
     * @return mixed|string
     */
    public function shortName()
    {
        if (strlen($this->name) > 30) {
            return '<span title="' . e($this->name) . '">' . substr(e($this->name), 0, 28) . '...</span>';
        }
        return $this->name;
    }

    /**
     * @return null
     */
    public function tooltip()
    {
        return $this->child ? $this->child->tooltip() : null;
    }

    /**
     * Short tooltip with location name
     * @return mixed
     */
    public function tooltipWithName()
    {
        return $this->child ? $this->child->tooltipWithName(250, $this->tags) : null;
    }

    /**
     * Full tooltip used for ajax calls
     * @return string|null
     */
    public function fullTooltip()
    {
        if (!$this->child) {
            return null;
        }

        $avatar = $text = null;

        if ($this->campaign->boosted()) {
            $boostedTooltip = strip_tags($this->tooltip);
            if (!empty(trim($boostedTooltip))) {
                $text = Mentions::mapEntity($this);
                $text = strip_tags($text);
            }
            if ($this->campaign->tooltip_image) {
                $avatar = '<div class=\'entity-image\' style=\'background-image: url(' . $this->child->getImageUrl(60) . ');\'></div>';
            }
        }
        if (empty($text)) {
            $text = Str::limit($this->child->entry(), 500);
            $text = strip_tags($text);
        }

        $name = '<span class="entity-name">' . $this->child->tooltipName() . '</span>';
        $subtitle = $this->child->tooltipSubtitle();
        if (!empty($subtitle)) {
            $subtitle = "<span class='entity-subtitle'>$subtitle</span>";
        }
        $text = $this->child->tooltipAddTags($text, $this->tags);

        return "<div class='entity-header'>$avatar<div class='entity-names'>" . $name . $subtitle . '</div></div>' . $text;
    }


    /**
     * @param string $action
     * @return string
     */
    public function url($action = 'show', $tab = null)
    {
        if ($action == 'index') {
            return route($this->pluralType() . '.index');
        }
        if (!empty($tab)) {
            return route($this->pluralType() . '.' . $action, [$this->entity_id, '#' . $tab]);
        }
        return route($this->pluralType() . '.' . $action, $this->entity_id);
    }

    /**
     * @return string
     */
    public function pluralType(): string
    {
        return Str::plural($this->type);
    }

    /**
     * Get the entity's type id
     * @return \Illuminate\Config\Repository|mixed
     */
    public function typeId()
    {
        return config('entities.ids.' . $this->type);
    }

    /**
     * @return mixed
     */
    public function starredAttributes()
    {
        return $this->attributes()->stared()->ordered();
    }

    /**
     * @return mixed
     */
    public function starredRelations()
    {
        return $this->relationships()->stared()->ordered()->has('target');
    }

    /**
     * Get the image (or default image) of an entity
     * @param int $width = 200
     * @param int $height = null (null takes width)
     * @return string
     */
    public function getImageUrl(int $width = 400, $height = null, $field = 'header_image'): string
    {
        if (empty($this->$field)) {
            return '';
        }

        return Img::crop($width, $height ?? $width)->url($this->$field);
    }

    /**
     * If an entity has entity files
     * @return bool
     */
    public function hasFiles(): bool
    {
        return $this->type != 'menu_links';
    }

    /**
     * Touch a model (update the timestamps) without any observers/events
     * @return mixed
     */
    public function touchSilently()
    {
        return static::withoutEvents(function() {
            return $this->touch();
        });
    }
}
