<?php
// Start of PHP
$valid_username = "admin";
$valid_password = "1234";

// Handle logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    
    setcookie("user", "", time() - 3600, "/");
    header("Location: cookie_system.php");
    exit();
    
}

// Handle form submission (login)
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        setcookie("user", $username, time() + 86400, "/");
        header("Location: cookie_system.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login System</title>
</head>
<body>

<?php
// If user is logged in (cookie set)
if (isset($_COOKIE['user'])) {
    
    echo "<h2>Welcome back, " . htmlspecialchars($_COOKIE['user']) . "!</h2>";
    echo "<a href='?action=logout'>Logout</a>";
    
} else {
    
    // If user is not logged in, show login form
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
        
    }
?>
    <h2>Login</h2>
    <form action="cookie_system.php" method="post">
        
        <label for="name">Name:</label>
        <input type="text" name="username" id="name" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <button type="submit">Login</button>
        
    </form>
<?php

}
?>

</body>
</html>