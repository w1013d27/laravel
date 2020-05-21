<?php

//ini_set('include_path','A');
//include_once "A/B/B.php";
include_once "vendor/autoload.php";
use Opis\Closure\SerializableClosure;
use function Opis\Closure\{serialize as s, unserialize as u};

class A{
    public $closure;
    function __construct()
    {
    }
}
$func = function (){
echo 'abcd';
};
$obj = new A();
$obj->closure = $func;

//$wrapper = new SerializableClosure();
$se = s($obj);
var_dump($se);
(u($se)->closure)();

//serialize($obj);
