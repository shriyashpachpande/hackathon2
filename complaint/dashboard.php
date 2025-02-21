<?php
include 'includes/db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$query = $pdo->prepare("SELECT * FROM complaint_register WHERE user_id = :user_id");
$query->execute(['user_id' => $_SESSION['user_id']]);
$complaints = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h1>Your Complaints</h1>
        <a href="complaints/add_complaint.php" class="btn btn-primary">Add Complaint</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
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
                        <td><?php echo $complaint['complaint_title']; ?></td>
                        <td><?php echo $complaint['status']; ?></td>
                        <td><?php echo $complaint['created_at']; ?></td>
                        <td>
                            <a href="Complaints/view_complaint.php?id=<?php echo $complaint['complaint_id']; ?>" class="btn btn-sm btn-info">View</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
