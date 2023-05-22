<?php
$host = "localhost:3306";
$db = "crud_clientes";
$user = "root";
$pass = "root";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno) {
   die("Falha na conexão com o banco de dados");
}