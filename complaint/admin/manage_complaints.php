<?php
include '../includes/db.php';
include '../includes/functions.php';
session_start();

if ($_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit;
}

// Handle the form submission for updating complaint status
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $complaint_id = $_POST['complaint_id'];
    $status = $_POST['status'];

    // Update the complaint status in the database
    $stmt = $pdo->prepare("UPDATE complaint_register SET status = :status WHERE complaint_id = :complaint_id");
    $stmt->execute([
        ':status' => $status,
        ':complaint_id' => $complaint_id,
    ]);

    // Redirect to avoid form resubmission on page refresh
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Fetch complaints and their associated user data
$complaints = $pdo->query("SELECT c.*, u.username FROM complaint_register c JOIN users u ON c.user_id = u.user_id")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../includes/header.php'; ?>
    <title>Manage Complaints</title>
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
        <h1>Manage Complaints</h1>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($complaints as $complaint): ?>
                    <tr>
                        <td><?php echo $complaint['complaint_id']; ?></td>
                        <td><?php echo $complaint['username']; ?></td>
                        <td><?php echo $complaint['complaint_title']; ?></td>
						<td><?php echo $complaint['complaint_description']; ?></td>
                        <td><?php echo $complaint['status']; ?></td>
                        <td><?php echo $complaint['created_at']; ?></td>
                        <td>
                            <form method="POST" action="">
                                <select name="status" class="form-select form-select-sm">
                                    <option value="open" <?php if ($complaint['status'] === 'open') echo 'selected'; ?>>Open</option>
                                    <option value="in_process" <?php if ($complaint['status'] === 'in_process') echo 'selected'; ?>>In Process</option>
                                    <option value="resolved" <?php if ($complaint['status'] === 'resolved') echo 'selected'; ?>>Resolved</option>
                                    <option value="closed" <?php if ($complaint['status'] === 'closed') echo 'selected'; ?>>Closed</option>
                                </select>
                                <input type="hidden" name="complaint_id" value="<?php echo $complaint['complaint_id']; ?>">
                                <button class="btn btn-primary btn-sm mt-2">Update</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
