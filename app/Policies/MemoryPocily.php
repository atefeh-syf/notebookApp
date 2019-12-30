<?php

namespace App\Policies;

use App\Memory;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MemoryPocily
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any memories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the memory.
     *
     * @param  \App\User  $user
     * @param  \App\Memory  $memory
     * @return mixed
     */
    public function view(User $user, Memory $memory)
    {
        //
    }

    /**
     * Determine whether the user can create memories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the memory.
     *
     * @param  \App\User  $user
     * @param  \App\Memory  $memory
     * @return mixed
     */
    public function update(User $user, Memory $memory)
    {
        //
        return $user->id == $memory->user_id;
    }

    /**
     * Determine whether the user can delete the memory.
     *
     * @param  \App\User  $user
     * @param  \App\Memory  $memory
     * @return mixed
     */
    public function delete(User $user, Memory $memory)
    {
        //
    }

    /**
     * Determine whether the user can restore the memory.
     *
     * @param  \App\User  $user
     * @param  \App\Memory  $memory
     * @return mixed
     */
    public function restore(User $user, Memory $memory)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the memory.
     *
     * @param  \App\User  $user
     * @param  \App\Memory  $memory
     * @return mixed
     */
    public function forceDelete(User $user, Memory $memory)
    {
        //
    }
}
