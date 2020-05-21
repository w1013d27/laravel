<?php

class My_Reflection_Method extends ReflectionMethod
{
    public $visibility = array();
    public function __construct($class, $name)
    {
        parent::__construct($class, $name);
        $this->visibility=Reflection::getModifierNames($this->getModifiers());
       // var_dump($this->getModifiers());
    }
}
class T{
    protected function x(){

    }
}
interface MM{

}
class U extends T implements MM{
   protected function x(){

    }
}
print_r(new My_Reflection_Method('U','x'));

abstract class Testing
{

    public static $AA=100;
    function __construct()
    {

    }

    const A=100;
    public function bar()
    {
        return;
    }


    abstract function dog();

    final public static function foo()
    {
        return;
    }

    public static function getDefaultProperties(){

        return        $re = new ReflectionClass(static::class);
        //print_r($re->getDefaultProperties());
    }


}
Testing::$AA  =99;
//var_dump(Testing::A);
$re = Testing::getDefaultProperties();
var_dump($re->getEndLine());


$cl = new ReflectionClass('IteratorIterator');
var_dump($cl->getExtension());
var_dump($re->getFileName());

// Example usage
class Foo{
function __construct(...$a)

{
    print_r($a);
}
}
$arg = new Foo();
$class = new ReflectionClass('Foo');

if ($class->isInstance($arg)) {
    echo "Yes";
}

// Equivalent to
if ($arg instanceof Foo) {
    echo "Yes";
}

// Equivalent to
if (is_a($arg, 'Foo')) {
    echo "Yes";
}
//new Foo(2);
var_dump($class->newInstance(1,2,3));
$class->newInstanceArgs([1,2,3,4]);
