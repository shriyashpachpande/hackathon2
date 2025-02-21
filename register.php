
<?php
$servername = "localhost";
$username = "root"; // Change as needed
$password = ""; // Change as needed
$dbname = "college_registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $course = $_POST['course'];
    $year = $_POST['year'];
    $branch = $_POST['branch'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    // Check email domain
    if (!preg_match('/@mgmcen\.ac\.in$|@sggscoe\.ac\.in$/', $email)) {
        echo "Invalid email domain. Please use @mgmcen.ac.in or @sggscoe.ac.in.";
        exit;
    }

    // Check for existing mobile number
    $stmt = $conn->prepare("SELECT * FROM students WHERE mobile = ?");
    $stmt->bind_param("s", $mobile);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo " Mobile number already exists.";
        exit;
    }

    // Check for existing email
    $stmt = $conn->prepare("SELECT * FROM students WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "Email already exists.";
        exit;
    }

    // Insert new student
    $stmt = $conn->prepare("INSERT INTO students (name, student_id, mobile, email, password, course, year, branch, dob, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $name, $student_id, $mobile, $email, $password, $course, $year, $branch, $dob, $address);
    
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>