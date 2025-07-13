<?php
function gcd($a, $b) {
    return $b == 0 ? $a : gcd($b, $a % $b);
}

$count = (int)readline();
$list = [];
for ($i = 1; $i <= $count; $i++) {
    $list[] = (int)readline();
}
//sort($list);
$gcd = $list[0];

for ($i = 1; $i < count($list); $i++) {
    $gcd = gcd($gcd, $list[$i]);
}
echo $gcd;