<?php
session_start();

require_once 'db.php';

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim(md5($_POST['password']));
$password_two = trim(md5($_POST['password_two']));

$pro = mysqli_query($connect, "SELECT * FROM `user` WHERE `email`='$email'");
if (mysqli_num_rows($pro) > 0) {
    $_SESSION['errors'] = 'Ошибка';
    header('Location: ../registr.php');
}else {
    if($password === $password_two) {
        mysqli_query($connect, "INSERT INTO `user` (`id`, `name`, `password`, `password_confirm`, `email`) VALUES (NULL, '$name', '$password', '$password_two','$email')");
        header('Location: ../login.php');
    }else {
        $_SESSION['errors'] = 'Ошибка';
        header('Location: ../registr.php');
    }
}