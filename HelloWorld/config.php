<?php

$hostname = "localhost:3306";
$database = "teste_php";
$user = "root";
$password = "root";

$mysqli = new mysqli($hostname, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Conectado! <br>";
}