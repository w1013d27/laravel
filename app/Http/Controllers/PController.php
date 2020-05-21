<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
class PController extends Controller
{


    /**
     * @var UserRepository $users
     */
    protected $users;
    function  __construct(UserRepository $users)
    {
        $this->users=$users;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function show( User $use,Post $Post)
    {
        //

        var_dump(\Route::currentRouteAction());
        var_dump(\Route::currentRouteName());
        var_dump(route('users.posts.show',['post'=>1,'use'=>2]));
        var_dump($this->users->find(3));
//var_dump($user);

//        var_dump($Post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $Post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $Post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $Post)
    {
        //
    }
}
