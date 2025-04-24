<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>

    <form action="" method="get">
        <label for="number">Enter A Number:</label><br>
        <input type="number" name="num" id="number" required><br><br>
        <button type="submit">Generate Table</button>
    </form>

    <?php
    if (isset($_GET["num"])) {
        $num = intval($_GET["num"]);
        echo "<h2>Multiplication Table of $num</h2>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>$num x $i = " . ($num * $i) . "</li>";
        }
        echo "</ul>";
    }
    ?>

</body>
</html>
