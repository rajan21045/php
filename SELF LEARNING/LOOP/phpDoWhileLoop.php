<?php

/*
The PHP do...while Loop
The PHP do...while loop - Loops through a block of code at least once, and then repeats the loop as long as the specified condition is true.

Syntax
do {
  // code to be executed
} while (condition);
Note: In a do...while loop the condition is tested after executing the code within the loop. This means that the loop will execute at least once, even if the condition is false.
*/


/*
Example
Set $i = 1, then print $i as long as $i is less than or equal to 100:
*/
$i =1;
do{
    echo $i;
    $i++;
}while($i<=100);


/*
The PHP break Statement
With the break statement we can stop the loop even if the condition is still true:

Example
Stop the loop when $i is 3:
*/
$k = 1;
do {
  if ($k == 3) break;
  echo $k;
  $k++;
} while ($ik < 6);

/*The PHP continue Statement
With the continue statement we can skip the current iteration, and continue with the next:

Example
Skip, and move to the next iteration if $i is 3:
*/
$j = 0;

do {
  $j++;
  if ($j == 3) continue;
  echo $j;
} while ($j < 6);
?>