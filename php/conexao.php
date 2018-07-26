<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=php-011-sofn-dp-calendar", "root", "");
    $conn->exec("set names utf8");
} catch (PDOExeception $e) {
    echo "Erro ao conectar com o MySQL: " . $e->getMessage();
    exit;
}
