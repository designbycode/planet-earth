<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\NavigationLink;
use App\Models\User;

class NavigationLinkPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any NavigationLink');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, NavigationLink $navigationlink): bool
    {
        return $user->checkPermissionTo('view NavigationLink');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create NavigationLink');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, NavigationLink $navigationlink): bool
    {
        return $user->checkPermissionTo('update NavigationLink');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, NavigationLink $navigationlink): bool
    {
        return $user->checkPermissionTo('delete NavigationLink');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any NavigationLink');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, NavigationLink $navigationlink): bool
    {
        return $user->checkPermissionTo('restore NavigationLink');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any NavigationLink');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, NavigationLink $navigationlink): bool
    {
        return $user->checkPermissionTo('replicate NavigationLink');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder NavigationLink');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, NavigationLink $navigationlink): bool
    {
        return $user->checkPermissionTo('force-delete NavigationLink');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any NavigationLink');
    }
}
