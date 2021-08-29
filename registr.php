<?php
session_start();
if($_SESSION['user']) {
    header('Location: ../index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/my.css">
    <title>Registration</title>
</head>
<body>
<div class="box">
    <h2 class="header">Registration</h2>
    <form class="main_contact" method="post" action="forms/registration.php">
        <div class="inputBox">
            <input type="text" name="name" required="">
            <label for="">Name</label>
        </div>
        <div class="inputBox">
            <input type="email" name="email" required="">
            <label for="">Email</label>
        </div>
        <div class="inputBox">
            <input type="password" name="password" required="">
            <label for="">Password</label>
        </div>
        <div class="inputBox">
            <input type="password" name="password_two" required="">
            <label for="">Password_re</label>
        </div>
        <input class="btn" type="submit" value="Registration">
        <div class="inputBox">
            <?php if($_SESSION['errors']) {
                echo $_SESSION['errors'];
            }

            unset($_SESSION['errors']);
            ?>
        </div>
    </form>
    <a href="login.php">Login?</a>
</div>
</body>
</html>