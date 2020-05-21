<?php
const A=100;
function f1($a=A,$b,$c){

}

$refunc = new ReflectionFunction('f1');

$repa = $refunc->getParameters();
var_dump($repa[0]->isDefaultValueAvailable());

class Foo {
    public $x = 1;
    protected $y = 2;
    private $z = 3;
}

$obj = new Foo;

$prop = new ReflectionProperty('Foo', 'y');
$prop->setAccessible(true); /* As of PHP 5.3.0 */
var_dump($prop->getValue($obj)); // int(2)

$prop = new ReflectionProperty('Foo', 'z');
$prop->setAccessible(true); /* As of PHP 5.3.0 */
var_dump($prop->getValue($obj)); // int(2)
