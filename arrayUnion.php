<?php
$a = array(
    "name" => "Rajan Poudel",
    "age" => 30,
    "city" => "Kathmandu"
);
 

$b = array(
    "age" => 30,
    "city" => "Kathmandu",
    "country" => "Nepal"
);


$c = array_merge($a, $b);
echo "Merged Array:\n";
print_r($c);
?>