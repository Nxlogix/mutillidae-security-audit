<?php
// SQL Injection Fix
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

// XSS Fix
echo htmlspecialchars($_GET['input'], ENT_QUOTES, 'UTF-8');

// IDOR Fix
$user_id = $_SESSION['user_id'];

// CSRF Fix (example token)
session_start();
$_SESSION['token'] = bin2hex(random_bytes(32));

// Command Injection Fix
$ip = escapeshellarg($ip);
$output = shell_exec("ping " . $ip);
?>
