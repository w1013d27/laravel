<?php

namespace App\Events;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Post;

class MyEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $post;
    public function __construct()
    {

        //$this->post = Post::findOrFail($post);
    }

    public function broadcastOn()
    {
       # return ['my-channel'];
         return new PrivateChannel('my-channel');
        //return new PrivateChannel('post.'.$this->post->id);
    }
/*
    public function broadcastWith(){
        return ['id'=>100];
    }*/

}
