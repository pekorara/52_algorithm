<?php
$count = (int)readline();
$list = [];
for($i=0;$i<$count;$i++){
    $line = trim(readline());
    $sum = 0;
    $len = strlen($line);

    // 預先計算所有31的冪次（保持無號）
    $powers = array();
    $powers[0] = 1;
    for($k=1;$k<$len;$k++){
        $powers[$k] = ($powers[$k-1] * 31) % (1 << 32);
        // 不要在這裡轉為有號整數
    }

    for($j=0;$j<$len;$j++){
        $power = $powers[$len-1-$j];
        $sum = ($sum + ord($line[$j]) * $power) % (1 << 32);
        // 也不要在這裡轉為有號整數
    }

    // 最後統一轉換為有號 32 位元整數
    if($sum >= (1 << 31)){
        $sum -= (1 << 32);
    }

    $list[] = $sum;
}
foreach($list as $value){
    echo $value . PHP_EOL;
}
