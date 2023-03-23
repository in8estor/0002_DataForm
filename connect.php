<?php

$mysqlContainer = 'mysql';
$username = 'root';
$password = 'root';

// включаем отчёт об ошибках для mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// устанавливаем соединение (имя контейнера, имя пользователя, пароль)
$connect = new mysqli($mysqlContainer, $username, $password);

// проверяем соединение
if ($connect->connect_error) {
    error_log('NO CONNECTION' . $connect->connect_error);
}

$connect->set_charset('utf8');
