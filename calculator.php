<!-- 
    Question: Create a PHP program in a single file that takes two numbers and an arithmetic operator via GET method 
    and displays the result based on the selected operation (Addition, Subtraction, Multiplication, or Division).
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

<form method="get" action="">
    <label for="num1">Number 1:</label>
    <input type="number" name="num1" id="num1" required><br><br>

    <label for="num2">Number 2:</label>
    <input type="number" name="num2" id="num2" required><br><br>

    <label for="operator">Operator:</label>
    <select name="operator" id="operator" required>
        <option value="" disabled selected hidden>Select an operator</option>
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select><br><br>

    <input type="submit" name="btn1" value="Calculate">
    &nbsp;&nbsp;
    <input type="reset" name="btn2" value="Cancel">
</form>

<?php
if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["operator"])) {
    $n1 = floatval($_GET["num1"]);
    $n2 = floatval($_GET["num2"]);
    $op = $_GET["operator"];
    $result = 0;

    switch ($op) {
        case "+":
            $result = $n1 + $n2;
            break;
        case "-":
            $result = $n1 - $n2;
            break;
        case "*":
            $result = $n1 * $n2;
            break;
        case "/":
            if ($n2 != 0) {
                $result = $n1 / $n2;
            } else {
                echo "<p style='color:red;'>Error: Division by zero is not allowed.</p>";
                exit;
            }
            break;
        default:
            echo "<p style='color:red;'>Invalid operator selected.</p>";
            exit;
    }

    echo "<h3>Result of $n1 $op $n2 = $result</h3>";
}
?>

</body>
</html>
