<?php
// You can create arrays by using the array() function:
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// The var_dump() function returns the data type and the value:
var_dump($arr);

// Count the number of elements in the array
echo count($arr);

echo "$arr[0] is the first element of the array.<br>";
echo "$arr[9] is the last element of the array.<br>";  

foreach($arr as $value) {
    echo "$value is an element of the array.<br>";
} 
// And if you use the array_push() function, you can add a new item.
array_push($arr, 11);
echo "After adding an element, the array is: .<br>"; 
foreach($arr as $value) {
    echo "$value <br>";
}


/* PHP Associative Arrays
Associative arrays are arrays that use named keys that you assign to them. */

$ary = array("name" => "John", "age" => 30, "city" => "New York");
// The var_dump() function returns the data type and the value: 
var_dump($ary);
// Count the number of elements in the associative array
echo count($ary);
echo "The name is: " . $ary["name"] . "<br>";
echo "The age is: " . $ary["age"] . "<br>";
echo "The city is: " . $ary["city"] . "<br>";
// Adding a new key-value pair to the associative array
$ary["country"] = "USA";
echo "After adding a new key-value pair, the associative array is: <br>";
foreach($ary as $key => $value) {
    echo "$key: $value <br>";
}

/* Multiple Lines
Line breaks are not important, so an array declaration can span multiple lines: */
$cars = [
  "Volvo",
  "BMW",
  "Toyota"
];



/*

PHP - Sort Functions For Arrays
In this chapter, we will go through the following PHP array sort functions:

sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
natsort() - sort arrays using a "natural order" algorithm
usort() - sort arrays by values using a user-defined comparison function
*/

// Example of sorting an array in ascending order
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
echo "Sorted numbers in ascending order: <br>";
foreach ($numbers as $number) {
    echo "$number <br>";
}
// Example of sorting an array in descending order
rsort($numbers);
echo "Sorted numbers in descending order: <br>";
foreach ($numbers as $number) {
    echo "$number <br>";
}
// Example of sorting an associative array by value in ascending order
$assocArray = array("b" => 2, "a" => 1,
                    "c" => 3);
asort($assocArray);
echo "Associative array sorted by value in ascending order: <br>";
foreach ($assocArray as $key => $value) {
    echo "$key => $value <br>";
}
// Example of sorting an associative array by key in ascending order
ksort($assocArray);
echo "Associative array sorted by key in ascending order: <br>";
foreach ($assocArray as $key => $value) {
    echo "$key => $value <br>";
}

// Example of sorting an associative array by value in descending order
arsort($assocArray);
echo "Associative array sorted by value in descending order: <br>";
foreach ($assocArray as $key => $value) {
    echo "$key => $value <br>";
}
// Example of sorting an associative array by key in descending order
krsort($assocArray);
echo "Associative array sorted by key in descending order: <br>";
foreach ($assocArray as $key => $value) {
    echo "$key => $value <br>";
}
// Example of natural order sorting
$naturalArray = array("img12.png", "img10.png", "img2.png", "img1.png");
natsort($naturalArray);
echo "Array sorted using natural order: <br>";
foreach ($naturalArray as $value) {
    echo "$value <br>";
}
// Example of user-defined comparison function for sorting
$customArray = array(3, 1, 4, 2);
usort($customArray, function($a, $b) {
    return $a - $b; // Sort in ascending order
});
echo "Array sorted using user-defined comparison function: <br>";
foreach ($customArray as $value) {
    echo "$value <br>";
}
// Example of using array_map to apply a function to each element of an array
$numbers = array(1, 2, 3, 4, 5);
$squaredNumbers = array_map(function($num) {
    return $num * $num; // Square each number
}, $numbers);
echo "Squared numbers: <br>";
foreach ($squaredNumbers as $value) {
    echo "$value <br>";
}

?>