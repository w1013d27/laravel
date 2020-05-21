<?php
namespace App\Repositories;
use App\User;
/**
 * Class UserRepository
 * @package App\Repositories\Eloquent
 */
class UserRepository extends BaseRepository implements UserRepositoryInterface{

   function __construct(User $user)
   {
       parent::__construct($user);

   }

}
