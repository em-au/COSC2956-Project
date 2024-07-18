<?php 
    $title = "My Books";
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 
    session_start();
?>

<?php 
    // SQL statement to retrieve read books for a user
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM books WHERE user_id = $user_id AND status = 'To read'";

        // Execute the SQL statement and get results
        $result = mysqli_query($conn, $sql); // $result contains either the result set object or false
?>

<!-- Display message if no books -->

<br><br>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2>My Books</h2>
        <div class="d-flex gap-2">
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" 
                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                    To read
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="viewallbooks.php">All</a></li>
                    <li><a class="dropdown-item disabled" aria-disabled="true">To read</a></li>
                    <li><a class="dropdown-item" href="viewcurrent.php">Currently reading</a></li>
                    <li><a class="dropdown-item" href="viewread.php">Read</a></li>
                </ul>
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                    Add
            </button>
        </div>
    </div>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php // Iterate through the user's books
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
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

<!-- Modal to add a book -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Book</h1>
      </div>
      <div class="modal-body">
          <form action="addbook.php" method="POST">
          <fieldset>
              <div class="form-group" style="text-align: left">
                <div>
                    <label for="Title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <br>
                <div>
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" required>
                </div>
                <br>
                <div>
                    <label for="status" class="form-label">Status</label>
                    <select id="status" class="form-select" name="status" required>
                    <option value="" selected disabled>Choose...</option>
                    <option>To read</option>
                    <option>Currently reading</option>
                    <option>Read</option>
                    </select>
                </div>
              </div>
              <br>
              <div style="text-align: right">
              <a href="viewallbooks.php"><button type="button" class="btn btn-light">Cancel</button></a>
              <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </fieldset>
          </form> 
      </div>
    </div>
  </div>
</div>



<?php require_once 'includes/footer.php' ?>
