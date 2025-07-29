<!-- 
    Question: Create a PHP program in a single file that takes a temperature value and a unit (Celsius or Fahrenheit) 
    via GET method and converts it to the other unit, displaying the result.
-->
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>

<body>

<form action="" method="get">
    
    <label for="temp">Enter a Temperature:</label>
    <input type="number" name="temp" id="temp" required><br><br>

    <label>Select a Unit:</label><br>
    <input type="radio" name="unit" id="celsius" value="Celsius" required>
    <label for="celsius">Celsius to Fahrenheit</label><br>
    <input type="radio" name="unit" id="fahrenheit" value="Fahrenheit" required>
    <label for="fahrenheit">Fahrenheit to Celsius</label><br><br>

    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
</form>

<?php
if (isset($_GET["temp"]) && isset($_GET["unit"])) {
    $temp = $_GET["temp"];
    $unit = $_GET["unit"];
    
    if ($unit == "Celsius") {
        $result = ($temp * 9/5) + 32;
        echo "<p>$temp &deg;C is equal to $result &deg;F</p>";
    } 
    
    else if ($unit == "Fahrenheit") {
        $result = ($temp - 32) * 5/9;
        echo "<p>$temp &deg;F is equal to $result &deg;C</p>";
    } 
    
    else {
        echo "<p>Invalid unit selected.</p>";
    }
    
    
}
?>

</body>
</html>
