<?php
$count = (int)readline();
$list = [];
for($i = 0; $i < $count; $i++){
    $sum = 0;
    $num = (int)readline();
    for($j = 1; $j <= sqrt($num); $j++){
        if($num % $j === 0){
            if($num / $j !== $j){
                $sum += $j;
                $sum += $num / $j;
            }else{
                $sum += $j;
            }
        }
    }
    $sum-=$num;
    $list[] = $sum === $num;
}

foreach($list as $value){
    echo ($value ? 'Y' : 'N') . PHP_EOL;
}