<?php

use Illuminate\Support\Facades\Broadcast;
use App\Post;
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/
Broadcast::channel('post.{id}',function ($user,Post $id){
    return true;
});
Broadcast::channel('App.User.{id}', function ($user, $id) {
   // return (int) $user->id === (int) $id;
    return true;
});
Broadcast::channel('my-channel', function ($user) {
    //var_dump($user);
    // return (int) $user->id === (int) $id;
    //var_dump($a);
//\Log::info(serialize($a));
    return true;
   // return false;
   // return [$user->id,$user->name];
});
Broadcast::channel('chat', function ($user) {
    // return (int) $user->id === (int) $id;
    //var_dump($a);
//\Log::info(serialize($a));
     return true;
  //  return [$user->id,$user->name];
});
