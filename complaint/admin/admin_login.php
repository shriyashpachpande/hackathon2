<?php
session_start();
include '../db.php'; // Database connection
include './functions.php'; // Common functions

// If the admin is already logged in, redirect to the admin dashboard
if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    header("Location: admin_dashboard.php");
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate input
    if (empty($email) || empty($password)) {
        $error = "Please fill out all fields.";
    } else {
        // Check admin credentials
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND role = 'admin'");
        $stmt->execute(['email' => $email]);
        $admin = $stmt->fetch();

        if ($admin && password_verify($password, $admin['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $admin['user_id'];
            $_SESSION['username'] = $admin['username'];
            $_SESSION['role'] = $admin['role'];

            // Redirect to admin dashboard
            header("Location: admin_dashboard.php");
            exit;
        } else {
            $error = "Invalid email or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './header.php'; ?>
    <title>Admin Login</title>
</head>
<body>
    <?php include './navbar.php'; ?>
    <div class="container mt-5">
        <h1>Admin Login</h1>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
