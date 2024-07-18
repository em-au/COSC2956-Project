<?php 
    $title = "Add a book";
    require_once 'includes/header.php';
    if (!isset($_SESSION['auth'])) {
        header('location: /loginform.php');
    } 
?>

<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <form method="POST" action="addbook.php" class="row g-3">
                <div class="col-md-12">
                    <label for="Title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="col-md-12">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" required>
                </div>
                <div class="col-md-6">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" class="form-select" name="status" required>
                    <option value="" selected disabled>Choose...</option>
                    <option>To read</option>
                    <option>Currently reading</option>
                    <option>Read</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php' ?>