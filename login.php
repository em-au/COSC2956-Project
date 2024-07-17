<?php 
    $title = "Login";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    session_start();
 ?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Create variables for user inputs
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Escape special characters in a string 
        $email = mysqli_real_escape_string($conn, $email);

        // Create a SQL query to retrieve the user's info from the db
        $sql = "SELECT * FROM client_info WHERE email = '$email'";
        // Execute the query and check for success
        $result = mysqli_query($conn, $sql);
        if ($result) {
            // Check if password is correct
            $row = mysqli_fetch_array($result);
            $db_password = $row['password'];
            if (password_verify($password, $db_password)) {
                // Set session variables indicating logged in and username
                $_SESSION['auth'] = 1;
                $_SESSION['username'] = $row['username'];
                header('location: /');
            }
            else {
                echo "Login unsuccessful"; // Can change this to an error popup!!!!!!!
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

<?php require_once 'includes/footer.php' ?>
