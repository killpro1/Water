<?php

const DB_HOST = 'localhost';
const DB_NAME = 'php_water';
const DB_USER = 'root';
const DB_PASS = '';

функция getDB() {
    return mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
}

?>
