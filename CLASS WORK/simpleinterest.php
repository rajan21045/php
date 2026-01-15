<!-- 
    Question: Create a PHP program in a single file that takes amount, rate, and time via GET method and calculates the simple interest.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest Calculator</title>
</head>
<body>

<form action="" method="get">
    <label for="amount">Amount (Principal):</label>
    <input type="number" name="amount" id="amount" required><br><br>

    <label for="time">Time (Years):</label>
    <input type="number" name="time" id="time" required><br><br>

    <label for="rate">Rate (%):</label>
    <input type="number" name="rate" id="rate" required><br><br>

    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
</form>

<?php
if (isset($_GET["amount"]) && isset($_GET["rate"]) && isset($_GET["time"])) {
    $p = floatval($_GET["amount"]);
    $r = floatval($_GET["rate"]);
    $t = floatval($_GET["time"]);

    $si = ($p * $r * $t) / 100;

    echo "<h3>Simple Interest for principal amount $p at rate $r% for $t years is: $si</h3>";
}
?>

</body>
</html>
