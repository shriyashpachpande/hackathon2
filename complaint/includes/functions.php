<?php
/*
<?php
// Dynamically determine the base URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$folder = dirname($_SERVER['SCRIPT_NAME']);
define('BASE_URL', $protocol . '://' . $host . $folder);
?>


function isLoggedIn() {
    return isset($_SESSION['user_id']);
	
}

function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
	http://localhost/complaint/complaints/complaints/add_complaint.php
}*/

?>
<?php

define('BASE_URL', 'http://localhost/complaint'); // Replace with your actual base URL



function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

function isUser() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'user';
}
?>
