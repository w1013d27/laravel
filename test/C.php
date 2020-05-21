<?php
namespace M;
include_once './B.php';
include_once './A.php';

class N{

}
class A{

}
\A\cat(\A\dog('M\N'));

echo B\D::class;

$str = '[2020-04-18 06:55:09] local.ERROR: The "--helper" option does not exist. {"exception":"[object] (Symfony\\Component\\Console\\Exception\\RuntimeException(code: 0): The \"--helper\" option does not exist. at /home/vagrant/code/laravel/vendor/symfony/console/Input/ArgvInput.php:200) ';
$pattern = '@^(\[.*?\]) [a-z]+\.[A-Z]+\: .*@';
$pattern = '@^\[([\d\s:-]+)\] ([^.]+?)\.([A-Z]+): .+@';
preg_match($pattern,$str,$match);
print_r($match);
