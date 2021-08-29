<?php
session_start();
if(!$_SESSION['user']) {
    header('Location: login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/my.css">
    <title>User</title>
</head>
<body>
<div class="box">
    <h2 class="header">Name: <?= $_SESSION['user']?></h2>
    <a href="/oute.php">Exit</a>
</div>
</body>
</html>