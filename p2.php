<?php
$count = (int)readline();
$m = [];
for ($i = 1; $i <= $count; $i++) {
    $num = (int)readline();
    if($num === 1) {
        $m[] = 'N';
        continue;
    }
    if($num === 2){
        $m[] = 'Y';
        continue;
    }
    $isFlag = false;
    for($j = 2; $j <= sqrt($num); $j++) {
        if($num % $j === 0){
            $m[] = 'N';
            $isFlag = true;
            break;
        }
    }
    if(!$isFlag){$m[] = 'Y';}
}

foreach($m as $v) {
    echo $v . PHP_EOL;
}