<?php
/*
The PHP for Loop
The PHP for loop - Loops through a block of code a specified number of times.

The for loop is used when you know how many times the script should run.
 
Syntax
for (initialization; condition; increment) {
  // code to be executed
}
This is how it works:

initialization - is evaluated once (typically sets a counter variable)
condition - is evaluated before each iteration (if true - continue loop)
increment - is evaluated after each iteration (typically used to increase/decrease the counter variable)
The following example shows a for loop that prints the numbers from 0 to 10:

Example
Print the numbers from 0 to 10:

*/
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

/*
Example Explained
$x = 0;, is evaluated once, and sets the counter variable to 0.
$x <= 10;, is evaluated before each iteration, and the loop continues if this expression evaluates to true. Here, the expression is true as long as $x is less than, or equal to 10.
$x++;, is evaluated after each iteration, and it increases the counter variable $x by one.
Decrease Counter Variable
The following example shows a for loop that prints the numbers from 10 to 0, by decreasing the counter variable:

Example
Print the numbers from 10 to 0:
*/
for ($x = 10; $x >= 0; $x--) {
  echo "The number is: $x <br>";
}

/*
The PHP break Statement
With the break statement we can stop the loop even if the condition is still true:

Example
Stop the loop when $x is 3:
*/
for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) break;
  echo "The number is: $x <br>";
}

/*
The PHP continue Statement
With the continue statement we can skip the current iteration, and continue with the next:

Example
Skip, and move to the next iteration if $x is 3:
*/
for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) continue;
  echo "The number is: $x <br>";
}
/*
Step 10
This example counts to 100 by tens:

Example
*/
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
?>