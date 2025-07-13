<?php
$count = (int)readline();
$list = [];
for($i = 0; $i < $count; $i++){
    $num = readline();
    $list[$num] = ($list[$num] ?? 0) + 1;
}

arsort($list);
$len = $list[array_key_first($list)];

$list = array_filter($list, function($num) use($len){
    return $num === $len;
});

if(count($list) === 0) {
    echo -1;
    exit;
}
ksort($list);
foreach($list as $num => $value){
    echo $num . PHP_EOL;
}