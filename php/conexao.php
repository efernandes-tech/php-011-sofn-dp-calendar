<?php

try {
    $conn = new PDO("mysql:host=ofcmikjy9x4lroa2.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=aaoarfd4gfctkdoj", "ybhnkw159nivvakf", "fmqd2bv9wzmy0wve");
    $conn->exec("set names utf8");
} catch (PDOExeception $e) {
    echo "Erro ao conectar com o MySQL: " . $e->getMessage();
    exit;
}
