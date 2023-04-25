<!DOCTYPE html>
<?php ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <fieldset>
            <legend>New Task</legend>
            <label for="">Tarefa
                <input type="text" name="desc" />
            </label>
            <input type="submit" value="register">
        </fieldset>
    </form>

    <?php 

        $tasklist = [];
        if (isset($_GET['desc'])) {
             $tasklist[] = $_GET['desc'];
        }

    ?>

        <table>
            <tr>
                <th>Tasks</th>
            </tr>

            <?php foreach($tasklist as $task):?>
            <tr>
                <td>
                    <?php echo $task; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

    
</body>
</html>