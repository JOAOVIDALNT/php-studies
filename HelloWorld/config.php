<?php

<<<<<<< HEAD
$hostname = "localhost:3306";
$database = "teste_php";
$user = "root";
$password = "";
=======
$host = "localhost";
$port = "5432";
$database = "teste";
$user = "postgres";
$pass = "root";

// $mysqli = new mysqli($hostname, $user, $password, $database);
// if ($mysqli->connect_errno) {
//     echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// } else {
//     echo "Conectado! <br>";
// }


$conn = pg_connect("host=$host port=$port dbname=$database user=$user password=$pass");

if(!$conn) {
    die("Não foi possível acessar o banco de dados");
}

>>>>>>> a233838fde213d6481ef463193451732c88fcb1d

