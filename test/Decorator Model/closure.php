<?php
interface Decorator{
    public static function handle(closure $next);
}
class First implements Decorator {

    public static function handle(closure $next){

        echo "First calling!",PHP_EOL;
     $a = $next();
        echo "  First adding!";
        return $a;
}
}
class Second implements Decorator{
    public static function handle(closure $next)
    {
        // TODO: Implement handle() method.
        echo "Second calling!",PHP_EOL;
       $a = $next();
        echo "  Second adding!",PHP_EOL;
        return $a;
    }
}
class Third implements Decorator{
    public static function handle(closure $next)
    {
        // TODO: Implement handle() method.
        echo "Third calling!",PHP_EOL;
     $a = $next();
        echo "  Third adding!",PHP_EOL;
        return $a;
    }
}

function slice(){

    return function ($func, $class){
        return function ()use($func,$class){
            return $class::handle($func);
        };
    };
}
$arr = [
 'First',
 'Second',
    'Third',
];
$arr = array_reverse($arr);
echo call_user_func(array_reduce($arr,slice(),function (){echo 'Initial calling',PHP_EOL;return 'initial';}));
