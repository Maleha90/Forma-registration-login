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
    <title>Login</title>
</head>
<body>
<div class="box">
    <h2 class="header">Login</h2>
    <form class="main_contact" method="post" action="forms/logins.php">
        <div class="inputBox">
            <input type="text" name="name" required="">
            <label for="">Name</label>
        </div>
        <div class="inputBox">
            <input type="password" name="password" required="">
            <label for="">Password</label>
        </div>
        <input class="btn" type="submit" value="Login">
        <a href="/registr.php">Registration?</a>
    </form>
    <?php
        if ($_SESSION['error']) {
            echo $_SESSION['error'];
        }
        unset($_SESSION['error'])
    ?>
</div>
</body>
</html>