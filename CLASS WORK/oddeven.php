<!-- Question: Create a PHP program in a single file that checks whether a given number is even or odd using the GET method. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
</head>
<body>

<form action="" method="get">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" required> <br><br>
    <input type="submit" value="Submit">&nbsp;&nbsp;
    <input type="reset" value="Reset">
</form>

<?php
if (isset($_GET['number'])) {
    $number = intval($_GET['number']);
    if ($number % 2 == 0) {
        echo "<h3>$number is even.</h3>";
    } else {
        echo "<h3>$number is odd.</h3>";
    }
}
?>

</body>
</html>
