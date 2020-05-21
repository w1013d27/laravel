<?php
namespace Tst;
class A{
    public $d='c';
    function c(){
       //$this->)c;
        var_dump(__METHOD__);
    }
}

function change(){
    $i = 0;
    return function ()use(&$i){
     echo ++$i;
    };
}
$a = change();
$a();
$a();
//var_dump($a::$static);
$obj = new A();
$c='c';
$obj->$c();
$c=function (){
    return 'd';
};
echo $obj->{$c()};
//array($obj,'c')();
