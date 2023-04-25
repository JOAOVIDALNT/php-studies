<?php
$host = "localhost:3306";
$db = "php_projeto_pt1";
$user = "root";
$pass = "root";

$conn = mysqli_connect($host, $user, $pass);

mysqli_select_db($conn, $db);

$query = mysqli_query($conn, "SELECT * FROM clientes") or die(mysqli_error($conn));


while($aux = mysqli_fetch_assoc($query)) {
    echo "----------------------------<br/>";
    echo "Nome: ".$aux["nome"]. "<br/>";
    echo "Email: ".$aux["email"]. "<br/>";
}