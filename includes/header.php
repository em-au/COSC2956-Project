<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>
    <link rel="icon" type="image/x-icon" href="../pics/favicon.svg">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="../js/script.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Book Tracker</a>
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
              <a class="nav-link" href="viewallbooks.php">My Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
          </ul>
          <div class="navbar-nav">
            <?php if (isset($_SESSION['auth'])) { ?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
              </li>
            <?php } ?>
            <?php if (!isset($_SESSION['auth'])) { ?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="signupform.php">Sign up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="loginform.php">Login</a>
              </li>
            <?php } ?>
          </div>
        </div>
      </div>
    </nav>