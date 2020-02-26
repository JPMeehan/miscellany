<?php

namespace App\Console\Commands;

use App\Models\CampaignPermission;
use Illuminate\Console\Command;
use Exception;

class CampaignPermissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'campaign:permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the campaign permission table';

    /**
     * @var int
     */
    protected $count = 0;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        CampaignPermission::chunk(5000, function ($permissions) {
            /** @var CampaignPermission $permission*/
            foreach ($permissions as $permission) {
                $action = $permission->action();
                $permission->action = $this->action($action);
                $permission->entity_type_id = $this->type($permission->table_name);
                $permission->save();
            }
        });

        $this->info("Migrated {$this->count} permissions.");

        return true;
    }

    /**
     * @param string $action
     * @return int
     * @throws Exception
     */
    protected function action(string $action): int
    {
        if ($action === 'read') {
            return CampaignPermission::ACTION_READ;
        }
        if ($action === 'edit') {
            return CampaignPermission::ACTION_EDIT;
        }
        if ($action === 'delete') {
            return CampaignPermission::ACTION_DELETE;
        }
        if ($action === 'add') {
            return CampaignPermission::ACTION_ADD;
        }
        if ($action === 'entity-note') {
            return CampaignPermission::ACTION_ENTITY_NOTE;
        }
        if ($action === 'permission') {
            return CampaignPermission::ACTION_PERMISSION;
        }

        throw new Exception("Unknown action $action");
    }

    /**
     * Map table name to type id
     * @param string $type
     * @return int
     * @throws \Exception
     */
    protected function type(string $type): int
    {
        switch($type) {
            case 'characters':
                return config('entities.ids.character');
            case 'attribute_templates':
                return config('entities.ids.attribute_template');
            case 'calendars':
                return config('entities.ids.calendar');
            case 'conversations':
                return config('entities.ids.conversation');
            case 'dice_rolls':
                return config('entities.ids.dice_roll');
            case 'events':
                return config('entities.ids.event');
            case 'families':
                return config('entities.ids.family');
            case 'items':
                return config('entities.ids.item');
            case 'journals':
                return config('entities.ids.journal');
            case 'locations':
                return config('entities.ids.location');
            case 'notes':
                return config('entities.ids.note');
            case 'organisations':
                return config('entities.ids.organisation');
            case 'quests':
                return config('entities.ids.quest');
            case 'races':
                return config('entities.ids.race');
            case 'tags':
                return config('entities.ids.tag');
        }

        throw new Exception("Unknown table_name $type");
    }
}
