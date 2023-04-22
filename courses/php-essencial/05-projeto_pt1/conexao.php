<?php
$host = "localhost:3306";
$db = "php_projeto_pt1";
$user = "root";
$pass = "root";

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn->connect_errno) {
   die("Falha na conexão com o banco de dados");
}

?>
