<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "senhas";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno) {
   die("Falha na conexão com o banco de dados");
}