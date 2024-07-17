<?php 
    $title = "Home";
    require_once 'includes/header.php';
    session_start();
?>

<h1>Hello <?php echo $_SESSION['username'] ?></h1>
<?php
    if (!isset($_SESSION['auth'])) {
        echo "You are not signed in";
    }
    echo "test";
?>

<?php require_once 'includes/footer.php' ?>
