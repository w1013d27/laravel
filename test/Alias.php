<?php

require_once '../vendor/autoload.php';
//function load()
//new Tst\A();
spl_autoload_register(function ($class){

    echo $class;
},true,true);
class Alias{
    private  $classCollections=[];

   public function  collectAlias($class,$alias){

        $this->classCollections[$alias]= $class;
    }
    public function setAlias($alias){

       class_alias($this->classCollections[$alias],$alias);
    }
}

$alias = new Alias();
$alias->collectAlias('Tst\\A','A');
$alias->setAlias('A');
var_dump(new A());


