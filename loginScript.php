<?php
$servername = "localhost"; // Change as needed
$username = "root"; // Change as needed
$password = ""; // Change as needed
$dbname = "college_registration"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT password FROM students WHERE student_id = ?");
    $stmt->bind_param("s", $student_id);
    $stmt->execute();
    $stmt->store_result();

    // Check if student ID exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, proceed to login
            echo "<script> alert('Login successfully'); window.location.href = 'index.php'; </script>"; // Redirect or perform login actions here
            // You can set session variables or redirect to another page
        } else {
            // Invalid password
            echo "<script>alert('Invalid Password or Student ID'); window.location.href='login.php';</script>";
        }
    } else {
        // Invalid Student ID
        echo "<script>alert('Invalid Password or Student ID'); window.location.href='login.php';</script>";
    }

    $stmt->close();
}






$conn->close();
