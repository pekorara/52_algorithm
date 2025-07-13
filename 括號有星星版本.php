<?php
$m = [];
$count = (int)readline();
for($i = 0; $i < $count; $i++) {

    $isFlag = false;
    $start = 0;
    $leftStack = [];
    $startStack = [];
    $list = str_split(readline());

    foreach($list as $k => $v){
        if($v === '(') $leftStack[] = $k;
        if($v === '*') $startStack[] = $k;
        if($v === ')'){
            if(!empty($leftStack)) array_pop($leftStack);
            else if(!empty($startStack)) array_pop($startStack);
            else {
                $m[] = 'N';
                $isFlag = true;
                break;
            }
        }
    }

    if(!$isFlag) {
        while(!empty($startStack) && !empty($leftStack)) {
            $left = array_pop($leftStack);
            $star = array_pop($startStack);
            if($left > $star){
                $m[] = 'N';
                $isFlag = true;
                break;
            }
        }

        if(!$isFlag){
            $m[] = empty($leftStack) ? 'Y' : "N";
        }
    }
}

foreach($m as $c){
    echo $c . PHP_EOL;
}
