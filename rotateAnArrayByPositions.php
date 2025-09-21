<?php
$arr = array(1,2,3,4,5,6,7,8,9,10);
$positions = 3; // Number of positions to rotate

$result = leftRotate($arr, $positions);
$result2 = rightRotate($arr, $positions);

function leftRotate($arr, $positions){
    $n = count($arr);
    $k = $k % $n; // handle if k > n
    $rotate = array_merge(array_slice($arr, $positions, $length), array_slice($arr, 0, $positions));
    return $rotate; 
}

function rightRotate($arr, $positions) {
    $n = count($arr);
    $k = $k % $n; // handle if k > n
    $rotated = array_merge(array_slice($arr, -$k), array_slice($arr, 0, $n - $k));
    return $rotated;
}
?>