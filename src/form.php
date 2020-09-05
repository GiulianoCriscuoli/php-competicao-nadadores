<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <form action="index.php" method="POST">
        <?php
            if(!empty($_SESSION['error'])) {

                echo $_SESSION['error'];
                echo $_SESSION['error'] = '';

            } else if(!empty($_SESSION['success'])) {

                echo $_SESSION['success'];
                echo $_SESSION['success'] = '';
            }
        ?>
        <br/><label>    
         Nome
         <input type="text" name="name" />
    
        </label><br/><br/>

        <label>    
         Idade
         <input type="number" name="age" /><br/><br/>
    
        </label>

        <input type="submit" value="Cadastrar" />


    </form>
</body>
</html>