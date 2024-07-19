<?php 
    $title = "Login";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    session_start();
 ?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Create variables for user inputs
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Escape special characters in a string 
        $username = mysqli_real_escape_string($conn, $username);

        // Create a SQL query to retrieve the user's info from the db
        $sql = "SELECT * FROM users WHERE username  = '$username'";
        // Execute the query and check for success
        $result = mysqli_query($conn, $sql);
        if ($result) {
            // Check if password is correct
            $row = mysqli_fetch_array($result);
            $db_password = $row['password'];
            if (password_verify($password, $db_password)) {
                // Set session variables indicating logged in and get user id
                $_SESSION['auth'] = 1;
                $_SESSION['user_id'] = $row['id'];
                header('location: /');
            }
            else {
               $_SESSION['incorrect_login'] = 1;
               header('location: loginform.php');
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

<?php require_once 'includes/footer.php' ?>
