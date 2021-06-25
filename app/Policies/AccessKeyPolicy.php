<?php

namespace App\Policies;

use App\Models\AccessKey;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccessKeyPolicy
{
    use HandlesAuthorization;


    /**
     * Perform pre-authorization checks.
     *
     * @param User $user
     * @param  string  $ability
     * @return void|bool
     */
    public function before(User $user, $ability)
    {
        if ($user->is_admin) {
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->roles()->where('role', 'access_key')->first();
    }




}
