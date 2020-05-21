
<div>{{$message}}</div>
<div {{$attributes->merge(['id'=>11,'class'=>'abc'])}}>
    {{ $slot }}

</div>
