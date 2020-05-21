<?php
$url = 'http://www.baidu.com/1?a=99';
var_dump($url = parse_url($url));

var_dump(dns_get_record($url['host']));
var_dump(json_encode([1,2,3]));
//echo time()->format('m/d/Y H:i');
echo (new DateTime())->format('m/d/Y H:i');
