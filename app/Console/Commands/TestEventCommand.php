<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Post;
use App\User;
class TestEventCommand extends Command
{
    protected $signature = 'sock:test {message}{message2}';
    protected $description = 'pusher test';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
       $post = \App\Post::find(1);
       $post->content=$this->argument('message2');
       $post->save();
        event(new \App\Events\MyEvent($this->argument('message')));
        //event(new \App\Events\MyEvent(\APP\Post::firstOrFail($this->argument('message'))));
        //event(new \Ap)
        //var_dump(User::all());
    //    broadcast(new \App\Events\MyEvent($this->argument('message')))->toOthers();
       // echo $this->argument('message');
    }

}
