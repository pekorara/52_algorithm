<?php
$s1 = array_map('intval',explode(' ',trim(readline())));
$s2 = array_map('intval',explode(' ',trim(readline())));
$maxLen = max(count($s1),count($s2));
$sum = [];
for($i = 0; $i < $maxLen; $i++){
    if(isset($s1[$i]) && isset($s2[$i])){
        $sum[] = $s1[$i] + $s2[$i];
        continue;
    }
    if(isset($s1[$i])){
        $sum[] = $s1[$i];
        continue;
    }
    if(isset($s2[$i])){
        $sum[] = $s2[$i];
    }
}

echo implode(' ',$sum);
