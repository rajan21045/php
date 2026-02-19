<?php
$fruit = array("Apple", "Mango", "Cherry", "Watermelon");
var_dump($fruit);
print_r($fruit);

$fruit[0] = "Orange";

foreach($fruit as $x){
    echo "$x <br>";
}
?>