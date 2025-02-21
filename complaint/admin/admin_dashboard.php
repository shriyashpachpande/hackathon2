<?php
include '../includes/db.php';
include '../includes/functions.php';
session_start();

if ($_SESSION['role'] !== 'admin') {
    header("Location: ./index.php");
    exit;
}

$totalComplaints = $pdo->query("SELECT COUNT(*) FROM complaint_register")->fetchColumn();
$openComplaints = $pdo->query("SELECT COUNT(*) FROM complaint_register WHERE status = 'open'")->fetchColumn();
$usersCount = $pdo->query("SELECT COUNT(*) FROM users WHERE role = 'user'")->fetchColumn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../includes/header.php'; ?>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="navbar">
        <ul>
            <li><a href="">Complaint Management</a></li>
            <li><a href="admin_dashboard.php">Dashboard</a></li>
            <li><a href="manage_complaints.php">Manage Complaint</a></li>
            <li><a href="manage_categories.php">Manage Categoris </a></li>
            <li><a href="admin_register.php">Register Admin</a></li>
         
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="container mt-5">
        <h1>Admin Dashboard</h1>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h3><?php echo $totalComplaints; ?></h3>
                        <p>Total Complaints</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h3><?php echo $openComplaints; ?></h3>
                        <p>Open Complaints</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h3><?php echo $usersCount; ?></h3>
                        <p>Total Users</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="manage_complaints.php" class="btn btn-primary mt-4">Manage Complaints</a>
        <a href="manage_categories.php" class="btn btn-primary mt-4">Manage Categories</a>
    </div>
</body>
</html>

