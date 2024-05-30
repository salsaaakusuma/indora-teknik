<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Barsto;
use Illuminate\Auth\Access\HandlesAuthorization;

class BarstoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function create(User $user){
        return in_array($user->email,[
            'supervisor@masuk.com',
            'caca@masuk.com',
            ]);
    }

    public function update(User $user){
        return in_array($user->email,[
            'supervisor@masuk.com',
            'caca@masuk.com',
            ]);
    }

    public function delete(User $user, Barsto $barsto){
        return in_array($user->email,[
            'supervisor@masuk.com',
            'caca@masuk.com',
        ]);
    }
}
