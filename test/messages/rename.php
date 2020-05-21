<?php
$dir = opendir(__DIR__);
while(($file = readdir($dir ))!==false){
if ($file !=='.'&& $file!=='..'){

    $name = str_replace('_zh_CN','',$file);
    //var_dump($name);
    rename($file,$name);
}
    //var_dump($file);


}
