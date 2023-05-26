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


function formatar_data($data) {
   return implode('/', array_reverse(explode('-', $data)));
}

function formatar_telefone($telefone) {
      $ddd = substr($telefone, 0, 2); // STRING, INDICE INICIAL, TAMANHO (TOTAL DE CARACTERES)
      $parte1 = substr($telefone, 2, 5);
      $parte2 = substr($telefone, 7); // QUANDO TERMINA NO FINAL NÃO PRECISA PREENCHER
      return "($ddd) $parte1-$parte2";
}