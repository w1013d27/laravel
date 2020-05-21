@extends('layouts.father')
@section('content')
    <example-component>
    </example-component>
    <component-a></component-a>
    <p>123</p>
    <p>123</p>
    <p>123</p>
    <p>123</p>
@endsection





{{--
@section('dog')
    dog!!
@endsection
@hasSection('dog')
    @yield('dog')
    @endif
-----------------------
@section('cat')
    @parent
    @parent
    @parent
@show
@forelse ([1,2,3] as $user)
    <li>{{ $user }}</li>
@empty
    <p>No users</p>
@endforelse
<x-alert :message="$message">
    <x-slot name="title">
        Server Error
    </x-slot>

    <strong>Whoops!</strong> Something went wrong!

    <x-slot name="book">
        Book!
    </x-slot>
</x-alert>
<x-now>

</x-now>

@each('view.name',['a'=>1,'b'=>2,'c'=>3],'job')
@push('stack')
    <div>Stack1</div>
    @endpush
@push('stack')
    <div>Stack2</div>
@endpush
@push('stack')
    <div>Stack3</div>
@endpush
@prepend('stack')
    <div>Stack0</div>
    @endprepend

@stack('stack')
@inject('user','\App\User')
@foreach($user::all() as $value)

    {{$value->name}}
    @endforeach
{{__('validation.accepted',['attribute'=>'test'])}}
{{__('I love you :name',['name'=>"小马"])}}
@lang('messages.welcome')


 --}}

