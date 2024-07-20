<?php 
    $title = "Mark as Read";
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 
    session_start();
    if (!isset($_SESSION['auth'])) {
        header('location: /loginform.php');
        die;
    } 
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        // Create variables
        $id = $_GET['id'];

        // Escape special characters in a string
        $id = mysqli_real_escape_string($conn, $id);

        // Check if the book belongs to the user
        $sql = "SELECT * FROM books WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($_SESSION['user_id'] != $row['user_id']) { 
            header('location: /viewallbooks.php');
            die; 
        }
        
        // Create a SQL query
        $sql = "UPDATE books SET status = 'Read' WHERE id = $id";

        // Execute the query and check for success
        if (mysqli_query($conn, $sql)) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?> 

<?php require_once 'includes/footer.php' ?>
