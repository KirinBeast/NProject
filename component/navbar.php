<?php
// Check if the session is not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Nolly</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.php">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <form class="d-flex" style="margin-right: 30px;">
                <input class="form-control me-sm-2" type="search" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div>
                <?php
                // Check if the user is logged in
                if (isset($_SESSION["username"])) {
                    // Display a welcome message and a dropdown with additional options
                    echo '<div class="btn-group" data-bs-theme="light">';
                    echo '<button type="button" class="nav-link" id="usernameDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="navbar-brand mt-1">@' . $_SESSION["username"] . '</button>';
                    echo '<button type="button" class="nav-link dropdown-toggle dropdown-toggle-split navbar-brand mt-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                    echo '</button>';
                    echo '<div class="dropdown-menu" aria-labelledby="usernameDropdown">';
                    echo '<a class="dropdown-item" href="profile.php">Profile</a>';
                    // Add more dropdown options as needed
                    echo '<div class="dropdown-divider"></div>';
                    echo '<a class="dropdown-item" href="includes/logout.php">Logout</a>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</nav>
