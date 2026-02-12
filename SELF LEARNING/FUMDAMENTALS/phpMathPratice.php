<?php
// The pi() function returns the value of PI:
echo (pi());
 
// The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
echo(min(11, 13, 56, 988, 0));
echo(max(11, 13, 56, 988, 0));

// The abs() function returns the absolute (positive) value of a number:
echo(abs(-5.5));

// The sqrt() function returns the square root of a number:
echo(sqrt(64));

// The round() function rounds a floating-point number to its nearest integer:
echo(round(3.45));
echo(round(5.3));

// The PHP rand() function generates a random number:
echo(rand());
/*
To get more control over the random number, you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.
For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):
Example:
*/
echo(rand(10, 100));
?>