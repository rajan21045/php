<?php
$arr = array(1,2,3,4,5,6,7,8,9,10);
$positions = 3; // Number of positions to rotate

$result = leftRotate($arr, $positions);
$result2 = rightRotate($arr, $positions);

function leftRotate($arr, $positions){
    $n = count($arr);
    $positions = $positions % $n; // handle if positions > n
    $rotated = array_merge(array_slice($arr, $positions), array_slice($arr, 0, $positions));
    return $rotated;
}

function rightRotate($arr, $positions) {
    $n = count($arr);
    $positions = $positions % $n; // handle if positions > n
    $rotated = array_merge(array_slice($arr, -$positions), array_slice($arr, 0, $n - $positions));
    return $rotated;
}
?>    return $rotated;
