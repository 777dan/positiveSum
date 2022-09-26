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
// for ($i = 0; $i < count($arrNum); $i++) {
//     $filter = array_filter($arrNum[$i], "test_positive");
//     for ($j = 0; $j < count($arrNum[$i]); $j++) {
//         $sum = array_sum($filter);
//     }
// }
// echo $sum;
// // print_r(array_sum($filter));
// echo(array_sum(array_filter($$arrNum[$i],"test_odd")));
for ($i = 0; $i < count($arrNum); $i++) {
    // for ($j = 0; $j < count($arrNum[$i]); $j++) {
    // // echo(array_sum(array_filter($arrNum[$i],"test_positive")));
    // }
    echo(array_sum(array_filter($arrNum[$i],"test_positive")));
    }