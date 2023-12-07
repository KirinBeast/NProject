<?php
session_start();
include '../connect/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Fetch user from the database based on the provided username
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Verify the password using password_verify function
        if (password_verify($password, $row["password"])) {
            // Password is correct
            $_SESSION["username"] = $username;
            header("location: ../dashboard.php"); // Redirect to the dashboard or any other page
        } else {
            // Password is incorrect
            echo "Invalid username or password";
        }
    } else {
        // User not found
        echo "Invalid username or password";
    }
}
?>
