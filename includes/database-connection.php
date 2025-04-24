<?php
$type = "mysql"; //Тип базы данных
$server = "localhost"; // Сервер, на котором находится БД
$db = "test"; // Имя БД
$port = "8889"; // Порт
$charset = "utf8mb4"; // Кодировка

$username = "***"; // Имя пользователя БД
$password = "***"; // Пароль БД

# Настройка PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

# Создание DSN
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), $e->getCode());
}    