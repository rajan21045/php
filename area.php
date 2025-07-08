<!-- 

    Question: Create a PHP program that calculates the area
    of a rectangle or square based on the given length and width 
    using the GET method.
    
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Calculator</title>
</head>
<body>

<form action="" method="get">

    <label for="length">Length:</label>
    <input type="number" name="length" id="length" required><br><br>

    <label for="width">Width:</label>
    <input type="number" name="width" id="width" required><br><br>

    <button type="submit">Result</button> &nbsp;&nbsp;
    <button type="reset">Reset</button>
    
</form>

<?php
if (isset($_GET["length"]) && isset($_GET["width"])) {
    
    $length = $_GET["length"];
    $width = $_GET["width"];

    // Check if it's a square or rectangle
    if ($length == $width) {
        echo "<h3>The area of the square is: " . ($length * $length) . "</h3>";
    } else {
        echo "<h3>The area of the rectangle is: " . ($length * $width) . "</h3>";
    }
}
?>

</body>
</html>
