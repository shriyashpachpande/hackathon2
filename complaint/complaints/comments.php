<?php
include '../includes/db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
}

$complaintId = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO comments (complaint_id, user_id, comment) VALUES (:complaint_id, :user_id, :comment)");
    $stmt->execute([
        'complaint_id' => $complaintId,
        'user_id' => $_SESSION['user_id'],
        'comment' => $_POST['comment']
    ]);
}

$stmt = $pdo->prepare("SELECT c.*, u.username FROM comments c JOIN users u ON c.user_id = u.user_id WHERE c.complaint_id = :complaint_id");
$stmt->execute(['complaint_id' => $complaintId]);
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Comments</title>
    <?php include '../includes/header.php'; ?>
</head>
<body>
<?php include '../includes/navbar.php'; ?>
    <div class="container mt-5">
        <h1>Comments</h1>
        <form method="POST" action="">
            <textarea name="comment" class="form-control mb-3" rows="3" placeholder="Add a comment"></textarea>
            <button class="btn btn-primary">Submit</button>
        </form>
        <div class="mt-4">
            <?php foreach ($comments as $comment): ?>
                <div class="mb-3">
                    <strong><?php echo $comment['username']; ?></strong>:
                    <p><?php echo $comment['comment']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
