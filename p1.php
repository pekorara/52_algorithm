<?php
$count = (int)readline();
for ($i = 1; $i <= $count; $i++) {
    $list = array_map('intval',explode(' ',trim(readline())));
    sort($list);
    $min = $list[0];
    $max = end($list);
    echo $min + $max . PHP_EOL;
}