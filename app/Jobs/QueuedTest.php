<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Jobs\Middleware\MiddlewareTest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class QueuedTest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
public $val;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($val)
    {
        //
        $this->val= $val;
    }
/*
    public function middleware(){
        return  [new MiddlewareTest];
    }*/

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        \Illuminate\Support\Facades\Log::info($this->val);//worker一旦被启动这个队列被加入到内容中，当再次修改这些代码不会在分发队列时被再次调用
//sleep(30);
//        var_dump($job);
        //var_dump($job);
//        Storage::putFile('log.txt',$this->val);
        //Storage::put('log.txt',$this->val);
        echo "!Queue Success!";
    }
}
