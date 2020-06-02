<?php

namespace App\Policies;

use App\Spencerphoto;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SpencerphotoPolicy
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
     * @param  \App\Spencerphoto  $spencerphoto
     * @return mixed
     */
    public function view(User $user, Spencerphoto $spencerphoto)
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
     * @param  \App\Spencerphoto  $spencerphoto
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Spencerphoto  $spencerphoto
     * @return mixed
     */
    public function delete(User $user, Spencerphoto $spencerphoto)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Spencerphoto  $spencerphoto
     * @return mixed
     */
    public function restore(User $user, Spencerphoto $spencerphoto)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Spencerphoto  $spencerphoto
     * @return mixed
     */
    public function forceDelete(User $user, Spencerphoto $spencerphoto)
    {
        //
    }
}
