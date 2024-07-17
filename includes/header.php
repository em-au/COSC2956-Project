<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>
    <link rel="icon" type="image/x-icon" href="https://algomau.ca/wp-content/uploads/2020/02/favicon-32x32-1.png">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-secondary">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Algoma University</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="labsolutions.php">Lab Solutions</a>
            </li>
          </ul>
          <div class="nav-right">
            <?php if (isset($_SESSION['auth'])) { ?>
              <a href="#"><button type="button" class="btn btn-primary border-0 disabled">Sign up</button></a>
              <a href="#"><button type="button" class="btn btn-primary border-0 disabled">Login</button></a>
              <a href="logout.php"><button type="button" class="btn btn-primary border-0 ">Logout</button></a>
            <?php } ?>
            <?php if (!isset($_SESSION['auth'])) { ?>
              <a href="signupform.php"><button type="button" class="btn btn-primary border-0">Sign up</button></a>
              <a href="loginform.php"><button type="button" class="btn btn-primary border-0 ">Login</button></a>
              <a href="#"><button type="button" class="btn btn-primary border-0 disabled">Logout</button></a>
            <?php } ?>
          </div>
        </div>
      </div>
    </nav>