<?php 
    $title = "Delete a book";
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 
    session_start();
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        // Create variables
        $id = $_GET['id'];

        // Escape special characters in a string
        $id = mysqli_real_escape_string($conn, $id);
        
        // Create a SQL query
        $sql = "DELETE FROM books WHERE id = $id";

        // Execute the query and check for success
        if (mysqli_query($conn, $sql)) {
            header('location: viewallbooks.php');
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?> 


<?php require_once 'includes/footer.php' ?>
