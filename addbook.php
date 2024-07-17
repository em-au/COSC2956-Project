<?php 
    $title = "Add a book";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    session_start();
 ?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Create variables for user inputs
        $title = $_POST['title'];
        $author = $_POST['author'];
        $status = $_POST['status'];
        $user_id = $_SESSION['user_id'];
       
        // Escape special characters in a string 
        $title = mysqli_real_escape_string($conn, $title);
        $author = mysqli_real_escape_string($conn, $author);
        $status = mysqli_real_escape_string($conn, $status);

        // Create a SQL INSERT query
        $sql = "INSERT INTO books (user_id, title, author, status) 
                VALUES ('$user_id', '$title', '$author', '$status')";
        // Execute the query and check for success
        if (mysqli_query($conn, $sql)) {
            header('location: /');
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

<?php require_once 'includes/footer.php' ?>
