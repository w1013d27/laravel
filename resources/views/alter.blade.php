@extends('layouts.father')
@push('scripts')
    <p>push1</p>
@endpush
@push('scripts')
    <p>push{{$b}}2</p>
@endpush


@push('scripts')
    This will be second...
@endpush



@prepend('scripts')
    This will be first...
@endprepend
@section('content')

<x-alert :message="$b" id="1211111113" >
    This is a default slot content!
</x-alert>
@endsection
@section('title','Test')
@section('show')
    @parent
   This is a show section!
    @empty($a)
        empty!!
    @endempty
    @isset($a)
       set!!
    @endisset
@endsection

@section('navigation')
   <div>
       Navigation!!!
   </div>

    @forelse($a as $value)
    <span>{{$value}}</span>
    @empty
    <p>No Value</p>
    @endforelse
<x-now b="100" id="10000000"></x-now>
    <ul>
@each('each',[1,2,3],'job')

    </ul>

{{__('I love you :name')}}
    @lang('I love you :name')
    @lang('messages.welcome')
@endsection


