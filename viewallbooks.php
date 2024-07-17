<?php 
    $title = "My Books";
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 
    session_start();
?>

<?php 
    // SQL statement to retrieve all books for a user
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM books WHERE user_id = $user_id";

        // Execute the SQL statement and get results
        $result = mysqli_query($conn, $sql); // $result contains either the result set object or false

        // if ($result) {
        //     while ($row = mysqli_fetch_assoc($result)) {
        //         echo $row['title'] . "<br>";
        //     }
        //     // foreach ($rows as $book) {
        //     //     print_r($book);
        //     //     echo "\n\n TEST: ";
        //     //     echo $book[2];
        //     //     echo $book['author'];
        //     // }
        // }

?>

<!-- Display message if no books -->

<br><br>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php // Iterate through the user's books
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $row['title'] ?></h5>
                            <p class="card-text">
                                Author: <?php echo $row['author'] ?></p>
                            <i><?php echo $row['status'] ?></i>
                            <p><a href="deletebook.php?id=<?php echo $row['id']?>" class="btn btn-primary">Delete</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </div>
</div>

<?php require_once 'includes/footer.php' ?>
