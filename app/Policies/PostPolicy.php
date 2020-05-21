<?php

namespace App\Policies;
use Illuminate\Auth\Access\Response;
use App\Post;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
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
        //var_dump(optional($user));
        var_dump($user->name);
       //var_dump(__METHOD__);
       return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @param String $query
     * @return mixed
     *
     */
    public function view(User $user, Post $post)
    {


       // return $query>2 ? true: false;
        return true;
        //
       // var_dump($user);
      //  var_dump($post);

      //  var_dump(__METHOD__);
       // return true;
        //var_dump($user->name);
       // return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->id <100? Response::deny('无权创建'): Response::allow();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(User $user, Post $post)
    {
        //
        echo $post->content;
        return $user->id >3 ?Response::deny('授权拒绝') : Response::allow();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(User $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function restore(User $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function forceDelete(User $user, Post $post)
    {
        //
    }
}
