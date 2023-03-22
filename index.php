<?php

//phpinfo();

$mysqlContainer = 'mysql';
$username = 'root';
$password = 'root';

// имя контейнера, имя пользователя, пароль
$connect = mysqli_connect($mysqlContainer, $username, $password);

// проверяем соединение
if (!$connect) {
    die('NO CONNECTION' . mysqli_connect_error()) . PHP_EOL;
} else {
    echo 'CONNECTED' . PHP_EOL;
}

//echo "<pre>";
//var_dump($connect);

// создаем базу данных
//$sql = 'CREATE DATABASE GuestBook';
$connect->query('CREATE DATABASE `GuestBook`');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Book</title>
</head>
<body>

    <form action="index.php" method="post">
        <p>
            <label for="name">Введите ваше имя:</label><br>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="e-mail">Введите e-mail:</label><br>
            <input type="e-mail" name="e-mail" id="e-mail">
        </p>
        <button type="submit">Отправить</button>
    </form>

</body>
</html>
