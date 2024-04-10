<?php
// Check if user is logged in
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.html");
    exit;
}

// Define the upload directory
$upload_dir = "uploads/";

// Check if the directory exists, if not, create it
if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// Upload the file
$target_file = $upload_dir . basename($_FILES["file"]["name"]);
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>

