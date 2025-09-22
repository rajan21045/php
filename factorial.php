<?php
$num = 5; // Change this value to compute factorial of a different number
$result = factorial($num);

function factorial($n) {
    if ($n < 0) {
        return "Undefined for negative numbers";
    } elseif ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}


?>