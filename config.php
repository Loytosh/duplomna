<?php
$dbhost = "localhost"; // Хост
$dbuser = "root"; // Имя пользователя
$dbpassword = ""; // Пароль
$dbname = "student_card"; // Имя базы данных

// Подключаемся к mysql серверу
$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
?>