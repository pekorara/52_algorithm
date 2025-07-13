 <?php
$count = (int)readline();
$list = [];
for($i = 1; $i <= $count; $i++){
    $line = str_split(array_filter(array_map('trim',explode(' ',trim(readline()))))[0]);
    $str = implode('',array_slice($line,0,count($line) - 1));
    if(!preg_match('/^\d+$/',$str)){
        $list[] = 'N';
        continue;
    }
    $sum = 0;
    $strList = array_reverse(str_split($str));
    foreach($strList as $k => $v){
        if(($k + 1) % 2 === 1){
            $add = (int)$v * 2;
            if(isset(((string)$add)[1])){
                $sum += (int)(((string)$add)[0]) +  (int)(((string)$add)[1]);
            }else{
                $sum += (int)(((string)$add)[0]);
            }
        }else{
            $sum += (int)$v;
        }
    }

    $sum *= 9;
    $sumString = str_split((string)$sum);
    $end = end($sumString);
    $list[] = $end == end($line) ? 'Y' : 'N';
}

foreach($list as $value){
    echo $value . PHP_EOL;
}