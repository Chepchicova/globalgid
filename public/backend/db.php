<?php
// параметры подключения


// подключение через mysqli
$conn = new mysqli($host, $user, $password, $dbname);

// проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// установка кодировки
$conn->set_charset("utf8mb4");
?>
