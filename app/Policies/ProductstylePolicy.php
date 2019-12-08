<?php

namespace App\Policies;

use App\User;
use App\Productstyle;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductstylePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the productstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Productstyle  $productstyle
     * @return mixed
     */
    public function viewAny(User $user){
        if ( $user->hasRole('cumtomizer') ) {
            return true;
        }
    }
    public function view(User $user, Productstyle $productstyle)
    {
        if ($user->can('view product style')) {
            return true;
        }
    }

    /**
     * Determine whether the user can create productstyles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ( $user->can('view product style') ) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the productstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Productstyle  $productstyle
     * @return mixed
     */
    public function update(User $user, Productstyle $productstyle)
    {
        if ( $user->can('update product style') ) {
            return true;
        }
    }

    /**
     * Determine whether the user can delete the productstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Productstyle  $productstyle
     * @return mixed
     */
    public function delete(User $user, Productstyle $productstyle)
    {
        if ( $user->can('delete product style') ) {
            return true;
        }
    }

    /**
     * Determine whether the user can restore the productstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Productstyle  $productstyle
     * @return mixed
     */
    public function restore(User $user, Productstyle $productstyle)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the productstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Productstyle  $productstyle
     * @return mixed
     */
    public function forceDelete(User $user, Productstyle $productstyle)
    {
        //
    }
}
