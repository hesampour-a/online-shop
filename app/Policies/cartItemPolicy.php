<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\CartItem;
use App\Models\User;

class cartItemPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CartItem $cartItem): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CartItem $cartItem): bool
    {
        if ($cartItem->user_id === $user->id) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CartItem $cartItem): bool
    {
        if ($cartItem->user_id === $user->id) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CartItem $cartItem): bool
    {
        if ($cartItem->user_id === $user->id) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CartItem $cartItem): bool
    {
        if ($cartItem->user_id === $user->id) {
            return true;
        }
        return false;
    }
}
