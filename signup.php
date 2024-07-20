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

        // Check if username is already taken
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        if ($row) { // Username is taken because retrieved a result from db
            $_SESSION['username_taken'] = 1;
            header('location: /signupform.php');
            die;
        }

        // Create a SQL INSERT query
        $sql = "INSERT INTO users (username, password) 
                VALUES ('$username', '$hashed_password')";
        // Execute the query and check for success
        if (mysqli_query($conn, $sql)) {
            $_SESSION['auth'] = 1;
            $_SESSION['username'] = $username;
            // Create a SQL query to retrieve the new user's info from the db
             $sql = "SELECT * FROM users WHERE username  = '$username'";
                // Execute the query and check for success
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $row = mysqli_fetch_array($result);
                    $_SESSION['user_id'] = $row['id']; // Get user id from db
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            // Redirect to home page is done by JS function after showing success message in an alert
            echo "<script>signupSuccess();</script>"; 
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

<?php require_once 'includes/footer.php' ?>
