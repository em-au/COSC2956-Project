<?php 
    $title = "Login";
    require_once 'includes/header.php' 
?>

<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- FORM - NEED TO CHANGE THE ACTION -->
            <form method="POST" action="login.php" class="row g-3">
                <div class="form-group row">
                    <label for="inputEmail4" class="col-form-label col-2">Email</label>
                    <div class="col-10">
                        <input type="email" class="form-control" id="inputEmail4" name="email" required>
                    </div>
                </div>
                <br><br>
                <div class="form-group row">
                    <label for="inputPassword" class="col-form-label col-2">Password</label>
                    <div class="col-10">
                        <input type="password" class="form-control" id="inputPassword" name="password" required>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php' ?>