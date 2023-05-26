<?php
$host = "localhost";
$db = "php-essencial";
$user = "root";
$pass = "root";
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port);

if($conn->connect_errno) {
   die("Falha na conexão com o banco de dados");
}