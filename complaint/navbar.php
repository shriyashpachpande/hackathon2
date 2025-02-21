<?php
require_once __DIR__ . '/includes/functions.php';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php">Complaint Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php if (isAdmin()): ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/admin/admin_dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/admin/manage_complaints.php">Manage Complaints</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/admin/manage_categories.php">Manage Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/admin/admin_register.php">Register Admin</a></li>
                <?php elseif (isUser()): ?>
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="complaints/add_complaint.php">Add Complaint</a></li>
                <?php endif; ?>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

