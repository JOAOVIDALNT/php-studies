<?php

$host = "localhost:3306";
$db = "php_projeto_pt1";
$user = "root";
$pass = "root";

$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_errno) {
    die("Falha na conexão com o banco de dados");
}