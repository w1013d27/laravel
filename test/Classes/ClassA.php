<?php

namespace Tst\Classes;
var_dump(__FILE__);
class ClassA{

    protected $arr;
    function __construct($arr)
    {
        $this->arr = $arr;
    }
    function  getValue(){
        return $this->arr;
    }
}
