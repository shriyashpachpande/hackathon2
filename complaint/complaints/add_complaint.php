<?php
include '../includes/db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO complaint_register (user_id, complaint_title, complaint_description) VALUES (:user_id, :complaint_title, :complaint_description)");
    $stmt->execute([
        'user_id' => $_SESSION['user_id'],
        'complaint_title' => $_POST['complaint_title'],
        'complaint_description' => $_POST['complaint_description']
    ]);

    header("Location: ../dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Complaint</title>
    <?php include '../includes/header.php'; ?>
    <style>
     

.navbar {
    background-color: white; /* Background color */
    overflow: hidden; /* Clear floats */
    margin-top: 35px;
}

.navbar ul {
    list-style-type: none; /* Remove bullet points */
    padding: 0; /* Remove padding */
    margin-left: 110px; /* Remove margin */
    display: flex; /* Use flexbox for horizontal layout */
    align-items: center;
    justify-content: center;
}

.navbar ul li {
    flex: 1; /* Make each item take equal space */
    width: 180px;
    height: 40px;
}

.navbar ul li a {
    display: block; /* Make the link fill the entire list item */
 
    text-decoration: none; /* Remove underline */
    color: #212529; /* Text color */
    text-align: center; /* Center the text */
}

.navbar ul li:hover {
    background-color: #575757;
    color: white; /* Change background on hover */
}
.navbar ul li a:hover{
    color: white;
}

 </style>
</head>

<body>

    <div class="navbar">
        <ul>
            <li><a href="../dashboard.php">Complaint Management</a></li>
            <li><a href="../dashboard.php">Dashboard</a></li>
            <li><a href="add_complaint.php">Add Complaint</a></li>
            <li><a href="../logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="container mt-5">
        <h1>Add Complaint</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label>Complaint Title</label>
                <input type="text" name="complaint_title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Complaint Description</label>
                <textarea name="complaint_description" class="form-control" rows="4" required></textarea>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>