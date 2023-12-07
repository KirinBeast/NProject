<?php
include '../connect/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password
    $repeatPassword = $_POST["repeat_password"];

    // Check if the plain text passwords match
    if ($_POST["password"] !== $repeatPassword) {
        echo "Error: Passwords do not match.";
        // You might want to redirect or display an error message to the user
        exit;
    }

    // Insert the user into the database
    $sql = "INSERT INTO users (username, email, mobile, password) VALUES ('$username', '$email', '$mobile', '$password')";
    $result = $conn->query($sql);

    if ($result) {
        // Registration successful
        header("location: ../login.php"); // Redirect to the login page
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

