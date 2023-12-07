<!DOCTYPE html>
<html>

<head>
    <title>Nolly: Login</title>
    <?php include_once 'component/head.php'; ?>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Nolly</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home
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
                    <button type='button' class='btn btn-danger' onclick="document.location='login.php'">Login</button>
                    <button type='button' class='btn btn-danger' onclick="document.location='register.php'">Register</button>
                </div>
            </div>
            </div>
        </nav>

        <div class="card mt-5" style="width: 25rem; margin: auto;">
            <div class="card-body text-center">
                <form class="mb-4" action="includes/loginpc.php" method="post">
                    <h1 class="mb-4">Login</h1>
                    <div class="form-group mt-2">
                        <label for="username" class="visually-hidden">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                    </div>
                    <div class="form-group mt-2 mb-5">
                        <label for="password" class="visually-hidden">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group d-grid gap-2" style="width: 15rem; margin: auto;">
                        <a href="/forgot-password" class="text-primary">Forgot your password?</a><br>
                        <button class="btn btn-success w-100">Login</button>
                        <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Back</button>
                    </div>
                </form>
            </div>
        </div>

        <?php include_once 'component/footer.php'; ?>
    </div>
</body>

</html>
