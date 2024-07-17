<?php 
    $title = "Welcome"; // Is this supposed to be the home page? what about index.php
    require_once 'includes/header.php';
    session_start();
?>

<br>
<br>
<div class="d-flex justify-content-center">
    <h2 style="color: red">Welcome, new member!</h2>
</div>

<?php require_once 'includes/footer.php' ?>