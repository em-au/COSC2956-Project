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
                                <?php echo $row['author'] ?></p>
                            <div class="d-flex justify-content-between">
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle" 
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?php echo $row['status'] ?></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="marktoread.php?id=
                                            <?php echo $row['id']?>">To read</a></li>
                                        <li><a class="dropdown-item" href="markcurrentlyreading.php?id=
                                            <?php echo $row['id']?>">Currently reading</a></li>
                                        <li><a class="dropdown-item" href="markread.php?id=
                                            <?php echo $row['id']?>">Read</a></li>
                                    </ul>
                                </div>
                                <a href="deletebook.php?id=<?php echo $row['id']?>" class="btn btn-outline-secondary">
                                    <i class="fa-solid fa-trash" style="color: #a09abc;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </div>
</div>

<?php require_once 'includes/footer.php' ?>
