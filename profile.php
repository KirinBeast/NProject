<!DOCTYPE html>
<html>
<head>
    <title>Nolly</title>
    <?php
    include_once 'component/head.php';
    include_once 'profilepc.php'; // Include profilepc.php at the beginning
    ?>
</head>
<body>

<div class="container">
    <?php
    include_once 'component/navbar.php';
    ?>

    <div>
        <h1>User Profile</h1>
        <p><strong>Username:</strong> <?php echo $user['username']; ?></p>
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
        <p><strong>Mobile:</strong> <?php echo $user['mobile']; ?></p>
        <h2>Edit Profile</h2>
        <form action="profile.php" method="post">
            <div class="form-group">
                <label for="new_email">New Email:</label>
                <input type="text" class="form-control" id="new_email" name="new_email" placeholder="Enter new email">
            </div>
            <div class="form-group">
                <label for="new_mobile">New Mobile:</label>
                <input type="text" class="form-control" id="new_mobile" name="new_mobile" placeholder="Enter new mobile number">
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>

    <?php
    include_once 'component/footer.php';
    ?>
</div>

</body>
</html>
