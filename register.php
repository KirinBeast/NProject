<!DOCTYPE html>
<html>

<head>
    <title>Nolly:Register</title>
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

        <section class="card mt-5" style="width: 20rem; margin: auto;">
            <div class="card-body text-center">
                <h2>Register</h2>
              <form action="includes/registerpc.php" method="post">
                <div class="form-group mt-2">
                  <input type="text" name="username" placeholder="Username...">
                </div>
                <div class="form-group">
                   <input type="text" name="email" placeholder="Email...">
                </div>
                <div class="form-group">
                  <input type="text" name="mobile" placeholder="Mobile Number..."><br>
                </div>
                <div class="form-group">
                  <input type="password" name="password" placeholder="Password..."><br>
                </div>
                <div class="form-group">
                  <input type="password" name="repeat_password" placeholder="Repeat Password..."><br>
                </div>

                <button type="submit" name="submit">Register</button>
              </form>

            </div>
        </section>

        <?php include_once 'component/footer.php'; ?>
    </div>

</body>

</html>
