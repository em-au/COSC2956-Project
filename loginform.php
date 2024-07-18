<?php 
    $title = "Login";
    require_once 'includes/header.php' 
?>

<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="centered">Login</h2>
            <form method="POST" action="login.php" class="row g-3">
                <div class="col-md-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
            <br>
            <div class="col-12 text-center">
                <a href="signupform.php">Don't have an account? Sign up here.</a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php' ?>