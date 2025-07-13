<?php
$count = (int)readline();
for($i = 0; $i < $count; $i++){
    readline();
    $stack = [];
    $result = '';
    $str = array_map('intval',explode(' ',trim(readline())));
    foreach($str as $value){
        while(count($stack) !== 0 && end($stack) > $value)
        {
            $result .= array_pop($stack);
        }
        $stack[] = $value;
    }

    while(count($stack) !== 0){
        $result .= array_pop($stack);
    }
    echo $result . PHP_EOL;
}