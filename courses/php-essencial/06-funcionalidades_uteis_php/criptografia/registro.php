<?php 
if(isset($_POST['email'])) {
    include('conexao.php');

    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $conn->query("INSERT INTO senhas (email, senha) VALUES('$email','$senha')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="email">
        <input type="password" name="senha">
        <button type="submit">Cadastrar senha</button>
    </form>
    
</body>
</html>