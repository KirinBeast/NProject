<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit();
}

// Include the database connection
include_once 'connect/db.php';

$username = $_SESSION["username"];

// Fetch user data from the database based on the session username using a prepared statement
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user was found
if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    // Handle the case where the user is not found
    echo "User not found.";
    exit();
}

// Handle form submission for profile update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newEmail = $_POST["new_email"];
    $newMobile = $_POST["new_mobile"];

    // Update user profile in the database using a prepared statement
    $updateSql = "UPDATE users SET email = ?, mobile = ? WHERE username = ?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param("sss", $newEmail, $newMobile, $username);
    $updateResult = $updateStmt->execute();

    if ($updateResult) {
        // Update successful
        header("location: profile.php");
        exit();
    } else {
        // Update failed
        echo "Error updating profile: " . $conn->error;
    }
}
?>
