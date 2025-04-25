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
    <?php
    if (isset($_POST["Student"])) {
        $name = $_POST["name"];
        $rollno = $_POST["rollno"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        $filename = "Student.txt";
        $fp = fopen($filename, "a") or die("Unable to open file!");
        $str = "$name, $rollno, $age, $gender, $email, $phone, $address\n";
        fwrite($fp, $str);
        fclose($fp);

        echo "<p>Data appended successfully!</p>";

        if (file_exists($filename)) {
            $fp = fopen($filename, "r") or die("Unable to open file!");
            echo "<h2>Student Details:</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Name</th><th>Roll No</th><th>Age</th><th>Gender</th><th>Email</th><th>Phone</th><th>Address</th></tr>";

            while (!feof($fp)) {
                $str = fgets($fp);
                $str = trim($str); // remove newline characters
                if ($str != "") {
                    $arr = explode(",", $str);
                    if (count($arr) >= 7) {
                        echo "<tr>
                            <td>$arr[0]</td>
                            <td>$arr[1]</td>
                            <td>$arr[2]</td>
                            <td>$arr[3]</td>
                            <td>$arr[4]</td>
                            <td>$arr[5]</td>
                            <td>$arr[6]</td>
                        </tr>";
                    }
                }
            }
            echo "</table>";
            fclose($fp);
        } else {
            echo "<p>No data found!</p>";
        }
    }
    ?>

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
</body>
</html>
