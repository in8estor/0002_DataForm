<?php

$mysqlContainer = 'mysql';
$username = 'root';
$password = 'root';

// включаем отчёт об ошибках для mysqli
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// устанавливаем соединение (имя контейнера, имя пользователя, пароль)
$connect = mysqli_connect($mysqlContainer, $username, $password);

// проверяем соединение
if (!$connect) {
    die('NO CONNECTION' . mysqli_connect_error());
}

mysqli_set_charset($connect, 'utf8');
