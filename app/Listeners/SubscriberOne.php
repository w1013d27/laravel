<?php

namespace App\Listeners;

//use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Queue\InteractsWithQueue;

class SubscriberOne
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function handleListenerOne($event){
        var_dump($event->value);
    }
    public function handleListenerTwo($event){
        var_dump($event->value);
    }

    /**
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events){
       $events->listen(
           'App\Events\EventOne',
           'App\Listeners\SubscriberOne@handleListenerOne'
       );
       $events->listen(
           'App\Events\EventTwo',
           'App\Listeners\SubscriberOne@handleListenerTwo'
       );
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
    }
}
