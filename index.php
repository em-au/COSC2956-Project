<?php 
    $title = "Home";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    session_start();
?>

<?php
    if (!isset($_SESSION['auth'])) { ?>
        <div class="container-fluid home-banner">
            <div class="banner-text">
                <h2>BOOK TRACKER</h2>
                <h6 class="mb-4">Keep track of books you'd like to read and books you've already read!</h6>
                <a href="signupform.php"><button type="button" class="btn btn-primary btn-lg home-button">
                    Get started now</button></a>
            </div>
            <div class="banner-image">
                <div><img src="pics/reading-book.png" alt="An illustration of a woman reading a book"></div>
                <div class="image-source"><a href="https://www.flaticon.com/free-stickers/student" title="student stickers">Student stickers created by Stickers - Flaticon</a></div>
            </div>
        </div>
    <?php }
    else if (isset($_SESSION['auth'])) { ?>
        <div class="container home-banner-white">
            <div class="banner-image">
                <div><img src="pics/books.png" class="books-icon" alt="An illustration of books on a shelf"></div>
                <div class="image-source"><a href="https://www.flaticon.com/free-stickers/reading" title="reading stickers">Reading stickers created by Stickers - Flaticon</a></div>
            </div>
            <div class="banner-text">
                <h2>CURRENTLY READING</h2>
                <?php 
                    // SQL statement to retrieve read books for a user
                    $user_id = $_SESSION['user_id'];
                    $sql = "SELECT * FROM books WHERE user_id = $user_id AND status = 'Currently reading'";

                    // Execute the SQL statement and get results
                    $result = mysqli_query($conn, $sql); // $result contains either the result set object or false
                    if ($result) { 
                        if (mysqli_num_rows($result) == 0) {
                            echo "<i>You have no books marked as 'currently reading'</i><br><br>";
                        }
                    }
                    while ($row = mysqli_fetch_assoc($result)) { ?> 
                        <div class="card mb-2">
                            <div class="card-body">
                                <?php echo "<b>" . $row['title'] . "</b> by " . $row['author']; ?>
                            </div>
                        </div>
                    <?php }
                ?>
                <a href="viewallbooks.php"><button type="button" class="btn btn-primary btn-lg home-button">
                    See all books</button></a>
            </div>
            
        </div>
    </div>
    <?php }
?>

<?php require_once 'includes/footer.php' ?>
