<?php
    $title = "Sign up";
    require_once 'includes/header.php';
    session_start();
?>

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <form method="POST" action="signup.php" onsubmit="return checkPasswords()" class="row g-3">
                <div class="col-md-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="col-md-12">
                    <label for="password1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="col-md-12">
                    <label for="password_confirm" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="passwordConfirm" name="password_confirm" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </div>
            </form>

        </div>
    </div>
</div>

<?php require_once 'includes/footer.php' ?>