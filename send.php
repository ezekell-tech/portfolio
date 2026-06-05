<?php
session_start();
require "database/dbconn.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $subject === '' || $message === '') { 
    $_SESSION['toast'] = "All fields are required!";
     $_SESSION['toast_type'] = "error";
      header("Location: index.php");
       exit; 
    }

$stmt = $dbconn->prepare(
    "INSERT INTO data (name, email, subject, message)
     VALUES (?, ?, ?, ?)"
);

$stmt->bind_param("ssss", $name, $email, $subject, $message);

if ($stmt->execute()) {

    $_SESSION['toast'] = "Message sent successfully!";
    $_SESSION['toast_type'] = "success";
    header("Location: index.php");
    exit;

} else {

    die("Database Error: " . $stmt->error);
}
?>