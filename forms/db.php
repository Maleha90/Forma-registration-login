<?php

$connect = mysqli_connect('localhost', 'root', '', 'test');

if (!$connect) {
    die('Ошибка соединение Базы данных');
}