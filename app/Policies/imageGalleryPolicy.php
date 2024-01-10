<?php

namespace App\Policies;

use App\Models\User;
use App\Models\imageGallery;
use Illuminate\Auth\Access\Response;

class imageGalleryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->isAdmin() || $user->isSuper_admin() || $user->isEditor();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, imageGallery $imageGallery): bool
    {
        return $user->isAdmin() || $user->isSuper_admin() || $user->isEditor();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->isAdmin() || $user->isSuper_admin();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, imageGallery $imageGallery): bool
    {
        return $user->isAdmin() || $user->isSuper_admin() || $user->isEditor();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, imageGallery $imageGallery): bool
    {
        return $user->isAdmin() || $user->isSuper_admin();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, imageGallery $imageGallery): bool
    {
        return $user->isSuper_admin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, imageGallery $imageGallery): bool
    {
        return $user->isSuper_admin();
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->isSuper_admin();
    }

    public function restoreAny(User $user ): bool
    {
        return $user->isSuper_admin();
    }
}
