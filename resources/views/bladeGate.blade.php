@extends('layouts.father')
@section('content')
   @cannot('create',$post)
       无权创建
   @endcannot
    @can('view',[$post,request()->get('a')])
        {{$post->content}}
    @endcan
    @unless(Auth::user()->can('create',$post))
        无权利创建
    @endunless
@endsection
