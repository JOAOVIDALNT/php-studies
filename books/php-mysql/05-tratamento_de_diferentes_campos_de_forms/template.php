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
            <label>
                Descrição (Opcional):
                <textarea name="descricao"></textarea>
            </label>
            <label>
                Prazo (Opcional):
                <input type="text" name="prazo" />
            </label>
            <fieldset>
                <legend>Prioridade:</legend>
                <label>
                    <input type="radio" name="prioridade" value="baixa" checked />
                    Baixa
                    <input type="radio" name="prioridade" value="media" />
                    Média
                    <input type="radio" name="prioridade" value="alta" />
                    Alta
                </label>
            </fieldset>
            <label>
                Tarefa concluída:
                <input type="checkbox" name="concluida" value="sim" />
            </label>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>


    <table>
        <tr>
            <th>Tarefa</th>
            <th>Descricao</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa['nome']; ?> </td>
                <td><?php echo $tarefa['descricao']; ?> </td>
                <td><?php echo $tarefa['prazo']; ?> </td>
                <td><?php echo $tarefa['prioridade']; ?> </td>
                <td><?php echo $tarefa['concluida']; ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>