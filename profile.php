<?php

session_start();

require_once __DIR__ . '/php/db.php';

$idUser = $_SESSION['user']['id'];
$connect = getDB();
mysqli_report(MYSQLI_REPORT_OFF); 

$sql = "SELECT * FROM `users` WHERE `id` = ('$idUser')";

$result = mysqli_query($connect, $sql);
$result = mysqli_fetch_all($result);

$login= "";

foreach($result as $item) {
    $login = $item[1];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div>
    <main>

        <h2>Личный кабинет</h2>

        <p>Добро пожаловать <?= $login ?></p>

        <a href="/Water/index.html">Выход</a>

        
    </main>
</div>

</body>
</html>