<!-- 
    Question: Create a PHP program in a single file that calculates the area of a circle based on the given radius using the POST method.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Area Calculator</title>
</head>
<body>
  
<form action="" method="post">
    <label for="radius">Radius:</label>
    <input type="number" name="radius" id="radius" required><br><br>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
</form>

<?php
if (isset($_POST["radius"])) {
    
    $radius = $_POST["radius"];
    $area = pi() * pow($radius, 2);  // Formula for area of a circle: A = π * r²
    echo "<h3>The area of the circle is: $area</h3>";
    
} else {

    echo "Please provide a radius.";
     
}
?>

</body>
</html>
