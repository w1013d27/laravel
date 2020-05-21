<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use Illuminate\Support\Facades\Log;

class SendNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $user;
    public $notification;

    /**
     * Create a new job instance.
     *
     * @param User $user
     * @param String $notification
     */
    public function __construct(User $user,String $notification)
    {
        //
        $this->user = $user;
        $this->notification = $notification;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        \Illuminate\Support\Facades\Log::info('123');
$this->user->notify(new $this->notification);

    }
}
