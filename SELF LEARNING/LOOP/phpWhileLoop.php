<?php

/*
The PHP while Loop
The PHP while loop - Loops through a block of code as long as the specified condition is true.

Syntax
while (condition) {
  //code to be executed repeatedly as long as condition is true
}

Tip: The condition is checked at the beginning of each iteration, which means that if the condition is initially false, the code block will not run even once.
*/

// Example
// Print $i as long as $i is less than 6:
$i = 1;
while($i<6){
    echo $i++;
    echo "<br>";
    $i++;
}
/*
The PHP break Statement
With the break statement we can stop the loop even if the condition is still true:
*/
while($i<6){
    if($i==3)break;
    echo $i++;
    echo "<br>";
    $i++;
}

// The PHP continue Statement
// With the continue statement we can skip the current iteration, and continue with the next:

// Example
// Skip, and move to the next iteration if $i is 3:

$j = 0;
while ($j < 6) {
  $j++;
  if ($j == 3) continue;
  echo $i;
}

/*Step 10
If you want the while loop count to 100, but only by each 10, you can increase the counter by 10 instead 1 in each iteration:

Example
Count to 100 by tens:
*/
$k = 0;
while ($k < 100) {
  $k+=10;
  echo $k;
  echo "<br>";
}
?>