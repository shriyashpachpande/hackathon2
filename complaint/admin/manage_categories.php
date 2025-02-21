<?php
include '../includes/db.php';
include '../includes/functions.php';
session_start();

if ($_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['category_name'])) {
        $stmt = $pdo->prepare("INSERT INTO categories (category_name) VALUES (:category_name)");
        $stmt->execute(['category_name' => $_POST['category_name']]);
    }

    if (!empty($_POST['subcategory_name']) && !empty($_POST['category_id'])) {
        $stmt = $pdo->prepare("INSERT INTO subcategories (subcategory_name, category_id) VALUES (:subcategory_name, :category_id)");
        $stmt->execute([
            'subcategory_name' => $_POST['subcategory_name'],
            'category_id' => $_POST['category_id']
        ]);
    }
}

$categories = $pdo->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../includes/header.php'; ?>
    <title>Manage Categories</title>
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
        <h1>Manage Categories</h1>
        <h3>Add Category</h3>
        <form method="POST" action="">
            <div class="mb-3">
                <label>Category Name</label>
                <input type="text" name="category_name" class="form-control">
            </div>
            <button class="btn btn-primary">Add Category</button>
        </form>

        <h3 class="mt-4">Add Subcategory</h3>
        <form method="POST" action="">
            <div class="mb-3">
                <label>Subcategory Name</label>
                <input type="text" name="subcategory_name" class="form-control">
            </div>
            <div class="mb-3">
                <label>Select Category</label>
                <select name="category_id" class="form-select">
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button class="btn btn-primary">Add Subcategory</button>
        </form>
    </div>
</body>
</html>
