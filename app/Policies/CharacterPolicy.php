<?php

namespace App\Policies;

use App\User;
use App\Models\Character;
use Illuminate\Auth\Access\HandlesAuthorization;

class CharacterPolicy extends EntityPolicy
{
    protected $model = 'character';

    /**
     * @param User $user
     * @param Entity $entity
     * @return bool
     */
    public function personality(User $user, $entity)
    {
        return ($this->update($user, $entity) || $entity->is_personality_visible);
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function random(User $user)
    {
        return $this->create($user);
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function organisation(User $user, $entity, $subAction = 'browse')
    {
        return  $user->campaign->id == $entity->campaign_id &&
            $this->checkPermission('organisation_' . $subAction, $user, $entity);
    }
}
