<?php 
    $title = "Home";
    require_once 'includes/header.php';
    session_start();
?>

<?php
    if (!isset($_SESSION['auth'])) { ?>
        <div class="container-fluid home-banner">
            <div class="banner-text">
                <h2>BOOK TRACKER</h2>
                <h6 class="mb-4">Keep track of books you'd like to read and books you've already read!</h6>
                <a href="signupform.php"><button type="button" class="btn btn-primary btn-lg home-button">
                    Get started now</button></a>
            </div>
            <div class="banner-image">
                <div><img src="pics/reading-book.png"></div>
                <div class="image-source"><a href="https://www.flaticon.com/free-stickers/student" title="student stickers">Student stickers created by Stickers - Flaticon</a></div>
            </div> <!-- ADD IMAGE ATTRIBUTION 
            <a href="https://www.flaticon.com/free-stickers/student" title="student stickers">Student stickers created by Stickers - Flaticon</a>-->
        </div>
    <?php }
    else if (isset($_SESSION['auth'])) { ?>
        <h1>Hello, <?php echo $_SESSION['username'] . "!" ?></h1>
    <?php }
?>

<?php require_once 'includes/footer.php' ?>
