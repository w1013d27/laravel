<?php

use Illuminate\Support\Facades\Route;
use App\User;
use Psr\Container\ContainerInterface;
use \App\Helpers\Helper;
use Illuminate\Contracts\Cache\Repository;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use App\Post;
use Illuminate\Auth\RequestGuard;
use Illuminate\Support\Str;
use App\Jobs\SendNotification;
use Illuminate\Routing\ResponseFactory;
use App\Http\Requests\StoreBlogPost;
use Illuminate\Support\MessageBag;
use Illuminate\Foundation\Bootstrap\HandleExceptions;
use Tst\Classes\ClassA;
use  Illuminate\Auth\SessionGuard;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('definedguard',function (Request $request){

   var_dump($request->session()->all());
})->middleware('auth:api2');
Route::get('outotherdevices',function (Request $request){

    \Auth::logoutOtherDevices('w1013d27');
});
Route::get('container',function (ContainerInterface $container){


  class A{

  }
  class B{
      protected $obj,$arr;
      public function __construct(A $a,$b,$c)
      {
          $this->obj =$a;
          $this->arr = [$b,$c];
      }

      function getValue(){
          return [$this->obj,$this->arr];
      }
  }

  App::bind('A',function (){
      return new A();
  });

    App::extend(\A::class ,function($service, $app){
        $service->a=100;
        return $service;

    });

  $obj = App::make('B',['b'=>1,'c'=>2]);
  var_dump($obj->getValue());



  #var_dump(App::make(ContainerInterface::class)); //App

    var_dump(App::make(ClassA::class));
    var_dump(resolve(ClassA::class));

    var_dump(get_class(app('router')));

});

Route::get('get-old-value',function (Request $request){

//    var_dump($request->old());
    var_dump($request->session()->all()['errors']->get('name'));
});

Route::match(['post','get'],'old-session/{value}',function (StoreBlogPost $request,$value){
\URL::defaults(['id'=>4]);

#返回所有输入数据,当query和post 存在同名参数时，input，all方法post优先，而query方法query参数优先
/*
var_dump($request->input());
var_dump($request->query());
var_dump($request->all());*/

#返回json数据
#    return [1,2,3];

    # 客户端发送json数据时，$request->all()结果会包含json数据，可以通过$request->json只返回接收的json数据,all(),input()方法时，同名json替代query。可以使用
    #query获取查询参数
/*
    var_dump($request->all());
    var_dump($request->input());
    var_dump($request->json());*/


    #根据控制器行为获取对应的路径url
//var_dump(action('TController@show'));

    #客户端发送二进制数据
//    var_dump($request->file());
 //   var_dump($request->header());
  //  var_dump($request->server());

var_dump($request->all());
$validator = Validator::make($request->all(),[
    'name'=>'integer|nullable',
    'email'=>'required',
    'date1'=>'date|after:tomorrow',
    'date2'=>'date|before:date1',
    'value.*.id'=>'distinct'
],['name.required'=>'Name is required!']);

var_dump($validator->errors());
var_dump($request->input());
var_dump(User::all()->where('name','w1013d27')->toArray());
var_dump(get_class(User::all()));

$rules = ['name'=>'unique:users,name','value'=>'integer|foo'];
//    $rules = ['value'=>'foo:123'];
$input = ['name'=>'w013d27','value'=>''];
//    $input = ['value'=>''];
$validator = Validator::make($input,$rules,['foo'=>'This :attribute must be foo!']);
var_dump($validator->errors()->all());
var_dump(a);
//\Illuminate\Validation\Validator::class;
//$validator->
//var_dump($bool);

/*
    $request->flash();
  //  var_dump($request->only());
    var_dump(storage_path('app'));
    var_dump(\Cookie::get('XSRF-TOKEN'));
    var_dump($request->input());
    var_dump($request->has('value'));
    var_dump($request->all());
    var_dump($request->value);*/
   // return \response('Hello World',200)->header('X-A','299');
   // return redirect('/');
  //  var_dump(view(),redirect(),\response(),\request());
//var_dump(\response());
    //return \response()->download(storage_path('app/file.txt'),'错误.txt');
  //  var_dump(\Response::make('test'));
   // var_dump(\response('233'));
    //var_dump(\response());
   // return \response()->file(storage_path('app/english.PDF'));

});

Route::get('book/{id}','TController@show')->name('book');
//var_dump(User::all()[6]);
Route::get('book2',function (){
    return redirect()->route('book',User::all()[6]);
});



Route::resources(['testcontroller'=>'UController']);


Route::resource('users.posts','PController')->parameters([
    'users'=>'use'
]);

/*
 * eyJpdiI6IjFOZjhreDZldUxqZWdnbWtYcXh0b0E9PSIsInZhbHVlIjoicWNIYzZCSDdiTHBmU1dYUGtjc1lXZXZNa1NoZG5xK2duaEJZTllUMEdoaDM2c2RJSENYbHlyY2VqMkptcmdNRSIsIm1hYyI6IjI5YjAzYWNlY2I4MTUzM2FjNmE0MzM1ZmRkZjYwODc2ZmU4ZmMzOWNlZTAzYzg3YjcwMzExNTI4YTJiZTQwZmMifQ
 */




Route::get('user/{user}','TestController@show');



/*传递多个路由参数测试*/
//闭包接收多个路由参数
Route::get('testcontroller/users/{uer}/posts/{post}',function (User $uer,Post $post){
   var_dump($uer,$post);
   var_dump(\route('testcontroller',['uer'=>2,'post'=>3]));
})->name('testcontroller');

/** 指定其它列来自动绑定模型*/
//列名称前面的路由参数必须和模型提示变量名称相同
Route::get('user/{usr:email}',function (User $usr){
  var_dump($usr);
});

/**显示绑定参数到指定模型*/
//此时参数名称不必与模型提示变量名称相同
Route::get('users/{uservalue}',function ($email){
    var_dump($email);
});



Route::get('http',function (){
 return Http::get('http://example.com') ;
});
Route::get('component',function (Request $request){

    var_dump($request->session()->all());
   // var_dump(Auth::viaRemember());
//    var_dump($request->session()->get('url.intended'));
//redirect()->intended();
  //  return view('alter',['a'=>[1,2,3],'b'=>'This is a message']);
 //   return redirect()->intended('old-session/3');
})->middleware('auth.basic.once');
Route::get('notification',function (Request $request){
return view('notification',['userId'=>$request->user()->id]);
})->middleware('auth');
Route::get('sendNotification',function (Request $request){
  // $request->user()->notify(new \App\Notifications\NotificationTest());
   SendNotification::dispatch($request->user(),\App\Notifications\NotificationTest::class)->delay(now()->addMinutes(0));
});
Route::get('task',function (){
    broadcast(new \App\Events\MyEvent('accept!'))->toOthers();
    return [1,2,3];
});
Auth::routes(['verify'=>true]);
Route::get('channel',function (){
    return view('channel');
    //var_dump(base_path());
    //return file_get_contents(base_path().'/public/channel.html');
});
//Route::get('blade-gate/{post?}',function (Post $post){
//    var_dump(\request()->user()->name);
//    var_dump(\Request::user()->name);
//    var_dump(\request()->getQueryString());
//    var_dump(\request()->get('a'));
//  return view('bladeGate',['post'=>$post]);
//})->middleware('verified');
//Route::resources(['post'=>'PostController']);
//Auth::routes();
//Route::get('/post/create',function (){

//})->middleware('can:create,App\Post');
Route::get('user/{id}',function ($id){
    return $id;
});
//Route::get('update/{post}',function (Post $post){
//});
//Request::qu
/*
Route::get('/post/{post}',function (Post $post){
//var_dump($post);
})->middleware('can:view,post');*/

//Route::get('/post/{post}','PostController@show')->middleware('can:view,post');

Route::get('basic',function (){
   $a = request()->header('Authorization');
   if (Str::startsWith($a,'Basic ')){
var_dump(explode(':',base64_decode(Str::substr($a,6))));
   }

})->middleware('auth.basic');
Route::get('/', function () {
  //  Auth::loginUsingId(54);
 //   Auth::once()
    return view('welcome');
});
Route::get('test','WebController@index');
Route::get('/database/{user:id}',function (User $user){
    var_dump($user);
    //Request['age'];
    var_dump(\Request::get('age'));

});
Route::get('/psr',function (ContainerInterface $container){
    var_dump( $container->get('config')['app.name']);
});
Route::get('/facade',function (){
//var_dump(Helper::dog());
return Helper::dog();
//    return '123';
})->name('hom');
Route::domain('{account}.homestead.test')->group(function (){
    Route::get('user/{id}',function ($account,$id){
      return $account.'  '.$id;
    });
});

Route::get('response',function (){
//    return Response::make('abc',202);
   // return Response::file(__DIR__.'/../resources/pictures/test.png');
/*
    return Response::streamDownload(function (){
       echo "I am a text";
    },'text.txt');*/
return redirect()->action('WebController@index');
});

Route::get('url/{id}',function ($id,Request $request){
var_dump($id,$request->url());
echo \URL::signedRoute('url.id',['id'=>1]);
echo '<br/>' ;
    $url = action('HomeController@index');
    echo $url;
})->name('url.id');

Route::get('session',function (Request $request){
$session = $request->session();
var_dump($session->all());
var_dump($session->get('status'));
//$session->flash('status','Task was successful!');
});
Route::get('blade',function (){
   // Auth::logoutOtherDevices($password);
   //var_dump( \Auth::logoutOtherDevices('w1013d27'));
  echo Auth::guard('api2')->user()->name;


});
//Route::controller('hidden','HiddenController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gate', static function(User $user){

   $post = Post::find(1);
    Gate::authorize('edit-settings',$post);
/*
Gate::authorize('and-response');
   var_dump( Gate::allows('edit-settings'));
    var_dump( Gate::denies('edit-settings'));
    var_dump(Gate::none(['and-response','and-response']));
*/

/*
    var_dump($user->name);
  var_dump(\Gate::allows('edit-settings'));
  var_dump(Gate::any(['edit-settings']));
    var_dump(Gate::none(['edit-settings']));
    var_dump(\Gate::denies('edit-settings'));
 //   Gate::authorize('edit-settings');
    var_dump(Gate::check('edit-settings'));

    var_dump(Gate::check('and-response'));*/
//    var_dump($a = Gate::inspect('and-response'));
//    var_dump($a);
//    $a->authorize();
  //  return Gate::allows('and-response');
  //  return Gate::allows('and-response');
//var_dump(User::);
    //var_dump($user->find);
    //var_dump(Auth::check());

    //var_dump(Gate::check('restore',[User::find(54),User::class]));
/*
   var_dump( \Request::user()->can('create',User::class));
    var_dump( \Request::user()->can('update',[User::class,\Request::user()]));*/
});

Route::fallback(function (){

 // return view('alter');
   // var_dump(Route::current());

    var_dump(Route::currentRouteName());
    var_dump(Route::currentRouteAction());
    //return 'ag';
})->name('fallback');
