<?php
$k = (int)readline();
$list =str_split(readline());
foreach($list as &$v) {
    $v = chr(ord($v) - $k);
}
echo implode($list);