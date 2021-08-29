<?php
session_start();
if(!$_SESSION['user']) {
    header('Location: ../login.php');
}
require_once 'db.php';

header('Location: ../index.php');

$name = $_POST['name'];
$password = md5($_POST['password']);

$log = mysqli_query($connect, "SELECT * FROM `user` WHERE `name` = '$name' AND `password` = '$password'");
if(mysqli_num_rows($log) > 0 && mysqli_num_rows($log) > 0){
    $_SESSION['user'] = $name;
}else {
    $_SESSION['error'] = 'Ошибка в логине или пароле';
    header('Location: ../login.php');
}