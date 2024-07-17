<?php 
    $title = "Sign up";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    session_start();
 ?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Create variables for user inputs
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $area_code = $_POST['area_code'];

        // Escape special characters in a string 
        $first_name = mysqli_real_escape_string($conn, $first_name);
        $last_name = mysqli_real_escape_string($conn, $last_name);
        $username = mysqli_real_escape_string($conn, $username);
        $hashed_password = mysqli_real_escape_string($conn, $hashed_password);
        $email = mysqli_real_escape_string($conn, $email);
        $address = mysqli_real_escape_string($conn, $address);
        $city = mysqli_real_escape_string($conn, $city);
        $province = mysqli_real_escape_string($conn, $province);
        $area_code = mysqli_real_escape_string($conn, $area_code); 

        // Create a SQL INSERT query
        $sql = "INSERT INTO client_info (first_name, last_name, username, password, email, 
                    address, city, province, area_code) 
                VALUES ('$first_name', '$last_name', '$username', '$hashed_password', '$email', 
                   '$address', '$city', '$province', '$area_code')";
        // Execute the query and check for success
        if (mysqli_query($conn, $sql)) {
            $_SESSION['auth'] = 1;
            $_SESSION['username'] = $username;
            header('location: /welcome.php');
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

<br>
<a href="index.php">Return to Home</a>

<?php require_once 'includes/footer.php' ?>
