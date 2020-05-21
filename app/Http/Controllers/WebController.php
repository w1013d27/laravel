<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
//use Illuminate\Support\Facades\Redis;
use Redis;
use App\Jobs\QueuedTest;
use Illuminate\Support\Str;
use App\Repositories\Eloquent\EloquentRepositoryInterface;

class WebController extends Controller{

    protected $users;
    public function __construct(EloquentRepositoryInterface $users)
    {
       $this->middleware(['auth','check.age'],['only'=>['index']]) ;
        $this->users=$users;
    }

    public function index(){

       // var_dump($this->users);
      //  var_dump($this->users->find(1));
        var_dump(\Request::user()->id);
        var_dump(\Request::route()->uri);
   //     var_dump(App::);
      //  User::first()->email = 'w1013d27@126.com';
       // return (string) Str::of('  Laravel Framework 6.x ')->trim()
        //    ->replace('6.x','7.x');
        //User::find()
        //echo "Hello,WEB";
       // Redis::set('string:user:name','wshuo');
      //  var_dump(User::all());
   //     var_dump(User::first()->email);
    //    foreach (User::first() as $key=>$value){
         //   var_dump($key,$value);
          //  echo $value->email,PHP_EOL,'<br/>';
           // $value->email;
      //      var_dump($value);
     //   }
        //var_dump(Redis::get('string:user:name'));
     //   $id =  $this->dispatch(new QueuedTest());
      // var_dump($id);
/*
        $queue = app('Illuminate\Contracts\Queue\Queue');
        $queueJob = $queue->pop();
        var_dump($queueJob);
        $queueJob->fire();*/

    }
}

