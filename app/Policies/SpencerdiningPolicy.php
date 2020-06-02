<?php

namespace App\Policies;

use App\User;
use App\Spencerdining;
use Illuminate\Auth\Access\HandlesAuthorization;

class SpencerdiningPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\spencerDining  $spencerDining
     * @return mixed
     */
    public function view(User $user, spencerdining $spencerdining)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\spencerDining  $spencerDining
     * @return mixed
     */
    public function update(User $user, spencerdining $spencerDining)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\spencerDining  $spencerDining
     * @return mixed
     */
    public function delete(User $user, spencerdining $spencerDining)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\spencerDining  $spencerDining
     * @return mixed
     */
    public function restore(User $user, spencerdining $spencerDining)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\spencerDining  $spencerDining
     * @return mixed
     */
    public function forceDelete(User $user, spencerdining $spencerdining)
    {
        //
    }
}
