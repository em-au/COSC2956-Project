<?php
    $title = "Sign up";
    require_once 'includes/header.php';
    session_start();
?>

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- FORM - NEED TO CHANGE ACTION -->
            <form method="POST" action="signup.php" onsubmit="return checkPasswords()" class="row g-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="first_name" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="last_name" required>
                </div>
                <div class="col-md-6">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" required>
                </div>
                <div class="col-md-6">
                    <label for="password1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="col-md-6">
                    <label for="password_confirm" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="passwordConfirm" name="password_confirm" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address" required>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city" required>
                </div>
                <div class="col-md-4">
                    <label for="inputProvince" class="form-label">Province</label>
                    <select id="inputProvince" class="form-select" name="province">
                    <option value="" selected disabled>Choose...</option>
                    <option>Alberta</option>
                    <option>British Columbia</option>
                    <option>Manitoba</option>
                    <option>New Brunswick</option>
                    <option>Newfoundland and Labrador</option>
                    <option>Northwest Territories</option>
                    <option>Nova Scotia</option>
                    <option>Nunavut</option>
                    <option>Ontario</option>
                    <option>Prince Edward Island</option>
                    <option>Quebec</option>
                    <option>Saskatchewan</option>
                    <option>Yukon</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputAreaCode" class="form-label">Area Code</label>
                    <input type="text" class="form-control" id="inputAreaCode" name="area_code" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>

<?php require_once 'includes/footer.php' ?>