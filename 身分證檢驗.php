<?php
$str = trim(readline());
$dic = [
    'A' => 10,
    'B' => 11,
    'C' => 12,
    'D' => 13,
    'E' => 14,
    'F' => 15,
    'G' => 16,
    'H' => 17,
    'I' => 34,
    'J' => 18,
    'K' => 19,
    'L' => 20,
    'M' => 21,
    'N' => 22,
    'O' => 35,
    'Q' => 24,
    'R' => 25,
    'S' => 26,
    'T' => 27,
    'U' => 28,
    'V' => 29,
    'W' => 32,
    'X' => 30,
    'Y' => 31,
    'Z' => 33
];
$first = $dic[$str[0]];
$num = 8;
$sum = 0;
for($i = 1; $i < strlen($str); $i++){
    $sum += (int)$str[$i] * $num;
    $num--;
    if($num === 0) $num = 1;
}
$firstEnd = ((int)((string)$first)[1]) * 9;
$firstFirst = ((int)((string)$first)[0]);
$sum += $firstFirst + $firstEnd;
echo $sum % 10 === 0 ? 'Y' : "N";