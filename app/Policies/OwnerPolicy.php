<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Owner;
use Illuminate\Auth\Access\HandlesAuthorization;

class OwnerPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function update(User $user){
        return in_array($user->email,[
            'supervisor@masuk.com',
            'caca@masuk.com',
            ]);
    }
}
