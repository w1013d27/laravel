<?php
var_dump(__DIR__);

function add($arr){
    return implode(' ',array_map(function ($val) {
        return is_array($val)?add($val):$val;
    }        ,$arr
));
}
echo add([1,2,3,4,['a','b','c'],[1,2]]);
$a = 1;
$c = function ()use (&$a){
$a++;
};
$c();
$c();
$c();
echo $a;
