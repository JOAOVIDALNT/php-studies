<?php

$erro = false;
if(count($_POST)) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_nascimento['nascimento'];

    if(empty($nome)) {
        $erro = "Preencha o nome";
    }

    if(empty($email)) {
        $erro = "Preencha o email";
    }



    if($erro) {
        echo "<p><strong>ERRO: $erro</strong></p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/cadastro.css">
    <link rel="stylesheet" href="./style/global.css">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <a href="/clientes.php">Voltar para a lista</a>
    <form method="POST" action=""> 
    <!-- cadastro feito dentro desta página (action em branco) -->
        <div>
            <label hidden>Nome</label>
            <input type="text" name="nome" placeholder="Nome">
        </div>
        <div>
            <label hidden>Email</label>
            <input type="text" name="email" placeholder="E-mail">
        </div>
        <div>
            <label hidden>Telefone</label>
            <input type="text" name="telefone" placeholder="Telefone">
        </div>
        <div>
            <label hidden>Data de Nascimento</label>
            <input type="text" name="nascimento" placeholder="Data de Nascimento">
        </div>

        <div>
            <button type="submit">Salvar Cliente</button>
        </div>
    </form>
</body>
</html>