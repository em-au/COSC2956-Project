<?php 
    $title = "Lab Solutions";
    require_once 'includes/header.php'; 
    session_start();
    if (!isset($_SESSION['auth'])) {
        header('location: /loginform.php');
    }
?>

<br>
<br>
<div class="d-flex justify-content-center">
    <h2 style="color: red">Lab Solutions</h2>
</div>

<?php require_once 'includes/footer.php' ?>