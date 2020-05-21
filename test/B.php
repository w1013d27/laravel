<?php
$pattern = '@bar(?=cc)..$@';
$str = 'barcc';

preg_match($pattern,$str,$match);
print_r($match);
