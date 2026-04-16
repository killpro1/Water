<?php
session_start();


require_once __DIR__ . '/db.php';

$login = $_POST['login'];
$password = $_POST['password'];

$connect = getDB();
mysqli_report(MYSQLI_REPORT_OFF); 


$sql = "SELECT * FROM `users` WHERE `login` = ('$login') AND  `password` = ('$password')";

$result = $connect->query($sql);


if ($result -> num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $_SESSION['user']['id'] = $row['id'];
        $_SESSION['user']['login'] = $row['login'];
        header("Location: /Water/profile.php");
    }
} else {
    echo 'Вы ввели некоретные данные';
}


?>