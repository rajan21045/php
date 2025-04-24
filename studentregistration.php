<!-- 
    Question: Create a student registration form in HTML that collects student's name, roll number, age, gender, email, phone number, and address. 
    Upon submission, store the data in a text file (Student.txt) using PHP. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>

<!-- Student Registration Form -->
<form action="" method="post">
    <label for="name">Student Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="roll">Roll Number:</label><br>
    <input type="text" id="roll" name="rollno" required><br><br>

    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age" min="1" max="150" required><br><br>

    <label>Gender:</label><br>
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="Female" required>
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="Other" required>
    <label for="other">Other</label><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone Number:</label><br>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" title="Enter 10 digit phone number" required><br><br>

    <label for="address">Address:</label><br>
    <textarea id="address" name="address" rows="4" cols="30" required></textarea><br><br>

    <input type="submit" name="Student" value="Submit">
</form>

<?php
// PHP code to handle the form submission
if (isset($_POST["Student"])) {
    $name = $_POST["name"];
    $rollno = $_POST["rollno"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $str = "";

    $filename = "Student.txt";
    
    // Open the file for writing, or create it if it doesn't exist
    if (!file_exists($filename)) {
        $fp = fopen($filename, "w") or die("Unable to create file!");
    } else {
        $fp = fopen($filename, "a") or die("Unable to open file!");
    }

    // Format the student data as a string and write it to the file
    $str = "$name, $rollno, $age, $gender, $email, $phone, $address\n";
    fwrite($fp, $str);
    echo "<p>Data appended successfully!</p>";

    // Close the file after writing
    fclose($fp);
}
?>

</body>
</html>
