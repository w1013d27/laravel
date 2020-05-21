<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

/*
   public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

*/
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
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        //
        $this->authorize('create',Post::class);
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
     * @param Post $post
     * @return \Illuminate\Http\Response|string
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Post $post)
    {
        //
      // var_dump( Post::find($id));
        //var_dump(var_dump($post));
       // var_dump('book');
      //  var_dump($post);
        $this->authorize('view',$post);
       // return  $post->id;
       // return  view('channel',['id'=>$post->id]);
        var_dump($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        //
        var_dump(__METHOD__);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
