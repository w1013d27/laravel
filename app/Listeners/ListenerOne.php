<?php

namespace App\Listeners;

use App\Events\EventOne;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ListenerOne
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

    /**
     * Handle the event.
     *
     * @param    $event
     * @return void
     */
    public function handle( $event)
    {
        //
        var_dump($event);
    }


}
