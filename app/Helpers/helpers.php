<?php
namespace App\Helpers{
    class Helper{

        static function dog(){
           // var_dump(__CLASS__);
            return __CLASS__;
        }
    }
}

namespace {
use Illuminate\Support\Str;
    if (!function_exists('basicToken')){

        /**
         * @param Illuminate\Http\Request $request
         * @return array|null
         */
        function basicToken($request){
            if (Str::startsWith($str = $request->header('Authorization'),'Basic ')){
                return explode(':',base64_decode(Str::substr($str,6)));
            }else
                return null;

        }
    }



    if (!function_exists('closure_dump')) {
        function closure_dump(Closure $c)
        {
            $str = 'function (';
            $r = new \ReflectionFunction($c);
            $params = array();
            foreach ($r->getParameters() as $p) {
                $s = '';
                if ($p->isArray()) {
                    $s .= 'array ';
                } else if ($p->getClass()) {
                    $s .= $p->getClass()->name . ' ';
                }
                if ($p->isPassedByReference()) {
                    $s .= '&';
                }
                $s .= '$' . $p->name;
                if ($p->isOptional()) {
                    $s .= ' = ' . var_export($p->getDefaultValue(), TRUE);
                }
                $params [] = $s;
            }
            $str .= implode(', ', $params);
            $str .= '){' . PHP_EOL;
            $lines = file($r->getFileName());
            for ($l = $r->getStartLine(); $l < $r->getEndLine(); $l++) {
                $str .= $lines[$l];
            }
            return $str;
        }
    }

}
