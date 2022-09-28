<?php
$arrNum = array(
    array(-3, 5, 7),
    array(1, -6, 4),
    array(-8, -5, 9)
);
function test_positive($var)
{
    return $var > 0;
}
for ($i = 0; $i < count($arrNum); $i++) {
    $filt = array_filter($arrNum[$i],"test_positive");
    $sum1 = array_sum($filt);
    $positive[$i] = $sum1;
    }
    $sum2 = array_sum($positive);
    echo $sum2;