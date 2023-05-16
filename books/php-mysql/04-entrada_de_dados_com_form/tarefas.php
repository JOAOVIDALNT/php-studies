<?php
session_start();


if (isset($_GET['nome'])) {
	$_SESSION['lista_tarefas'][] = $_GET['nome'];
}

$lista_tarefas = array();

if (isset($_SESSION['lista_tarefas'])) {
	$lista_tarefas = $_SESSION['lista_tarefas'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gerenciador de Tarefas</title>
</head>

<body>
	<form>
		<fieldset>
			<legend>Nova tarefa</legend>
			<label>
				Tarefa:
				<input type="text" name="nome" />
			</label>
			<input type="submit" value="Cadastrar" />
		</fieldset>
	</form>


	<table>
		<tr>
			<th>Tarefas</th>
		</tr>
		<?php foreach ($lista_tarefas as $tarefa) : ?>
			<tr>
				<td><?php echo $tarefa; ?> </td>
			</tr>
		<?php endforeach; ?> 
	</table>
</body>

</html>