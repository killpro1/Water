<?php

require_once __DIR__ . '/db.php';

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

$connect = getDB();
mysqli_report(MYSQLI_REPORT_OFF);  

$sql = "INSERT INTO `users` (login, email, password) VALUES ('$login', '$email', '$password')";

if ($connect -> query($sql))  {
    // echo 'Регистрация прошла успешно!';
    header("Location: /Water/login.html");
}else {
    echo 'Уже зарегистрирован';
}

?>