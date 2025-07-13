<?php
$line = (int)readline();
$list = [];
for($i = 0; $i < $line; $i++){
    $str = readline();
    $count = 0;
    if(preg_match('/\d/',$str)){
        $count++;
    }

    if(preg_match('/[A-Z]/',$str)){
        $count++;
    }

    if(preg_match('/[a-z]/',$str)){
        $count++;
    }


    if (preg_match('/[~!@#$%^&*()_+\-=\|\'";:\/.,?><]/', $str)){
        $count++;
    }

    $list[] = $count;
}

foreach($list as $num){
    echo $num . PHP_EOL;
}
