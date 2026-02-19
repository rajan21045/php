<?php
/*
PHP foreach Loop on Indexed Arrays
The PHP foreach loop - Loops through a block of code for each element in an array or each property in an object.
The following example loops through all the items of an indexed array:

Example
Loop through the items of an indexed array:
*/
$colors = array("red", "green", "blue", "yellow");
foreach($colors as $value){
    echo "$value <br>";
}
 
/*
Explanation: For each loop iteration, the value of the current array element is assigned to the variable $value. The iteration continues until it reaches the last array element.

PHP foreach Loop on Associative Arrays
The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.

Associative arrays are different, associative arrays use named keys, and when looping through them, you might also want to keep the key name as well as the value.

This is done by specifying both the key and value in the foreach loop, like this:

Example
Print both the key and the value from the $members array:
*/

$detail = array("Rajan Poudel" => 21, "Ashok Poudel" => 20, "Anuj Dhakal" => 21);
foreach($detail as $key => $value){
    echo "Key = " . $key . ", Value = " . $value . "<br>";
}

// The PHP break Statement
// With the break statement we can stop the loop even if it has not reached the end:

// Example
// Stop the loop if $x is "blue":
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}

// The PHP continue Statement
// With the continue statement we can skip the current iteration, and continue with the next:

// Example
// Skip, and move to the next iteration if $x is "blue":
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}
?>