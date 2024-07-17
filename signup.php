<?php 
    $title = "Sign up";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    session_start();
 ?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Create variables for user inputs
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
       
        // Escape special characters in a string 
        $username = mysqli_real_escape_string($conn, $username);
        $hashed_password = mysqli_real_escape_string($conn, $hashed_password);

        // Create a SQL INSERT query
        $sql = "INSERT INTO users (username, password) 
                VALUES ('$username', '$hashed_password')";
        // Execute the query and check for success
        if (mysqli_query($conn, $sql)) {
            $_SESSION['auth'] = 1;
            $_SESSION['username'] = $username;
            // probably need to grab the user id  !!!!!!!!!!!!
            header('location: /');
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

<?php require_once 'includes/footer.php' ?>
