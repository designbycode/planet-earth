<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Studio;
use App\Models\User;

class StudioPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Studio');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Studio $studio): bool
    {
        return $user->checkPermissionTo('view Studio');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Studio');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Studio $studio): bool
    {
        return $user->checkPermissionTo('update Studio');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Studio $studio): bool
    {
        return $user->checkPermissionTo('delete Studio');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Studio');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Studio $studio): bool
    {
        return $user->checkPermissionTo('restore Studio');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Studio');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Studio $studio): bool
    {
        return $user->checkPermissionTo('replicate Studio');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Studio');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Studio $studio): bool
    {
        return $user->checkPermissionTo('force-delete Studio');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Studio');
    }
}
