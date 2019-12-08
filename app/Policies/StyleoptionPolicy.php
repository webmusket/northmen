<?php

namespace App\Policies;

use App\User;
use App\Styleoption;
use Illuminate\Auth\Access\HandlesAuthorization;

class StyleoptionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the styleoption.
     *
     * @param  \App\User  $user
     * @param  \App\Styleoption  $styleoption
     * @return mixed
     */
    public function viewAny(User $user){
        if ( $user->hasRole('cumtomizer') ) {
            return true;
        }
    }

    public function view(User $user, Styleoption $styleoption)
    {
        if ($user->can('view style option')) {
            return true;
        }
    }

    /**
     * Determine whether the user can create styleoptions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ( $user->can('create style option') ) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the styleoption.
     *
     * @param  \App\User  $user
     * @param  \App\Styleoption  $styleoption
     * @return mixed
     */
    public function update(User $user, Styleoption $styleoption)
    {
        if ( $user->can('update style option') ) {
            return true;
        }
    }

    /**
     * Determine whether the user can delete the styleoption.
     *
     * @param  \App\User  $user
     * @param  \App\Styleoption  $styleoption
     * @return mixed
     */
    public function delete(User $user, Styleoption $styleoption)
    {
        if ( $user->can('delete style option') ) {
            return true;
        }
    }

    /**
     * Determine whether the user can restore the styleoption.
     *
     * @param  \App\User  $user
     * @param  \App\Styleoption  $styleoption
     * @return mixed
     */
    public function restore(User $user, Styleoption $styleoption)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the styleoption.
     *
     * @param  \App\User  $user
     * @param  \App\Styleoption  $styleoption
     * @return mixed
     */
    public function forceDelete(User $user, Styleoption $styleoption)
    {
        //
    }
}
