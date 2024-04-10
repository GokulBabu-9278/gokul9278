<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check username and password
    $username = "oogway"; // Updated username
    $password = "oogway@1231"; // Updated password

    if ($_POST["username"] == $username && $_POST["password"] == $password) {
        // Start the session
        session_start();
        $_SESSION["loggedin"] = true;

        // Redirect to file upload page
        header("location: upload.php");
        exit;
    } else {
        // Redirect back to login page with error message
        header("location: index.html?error=1");
        exit;
    }
} else {
    // Redirect back to login page
    header("location: index.html");
    exit;
}
?>
