<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    session_start();
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    if ($usuario=='gerardo' && $pass='123'){
        $_SESSION["auth"]=TRUE;
        $_SESSION["usuario"]=$usuario;
        header("Location: menu.php");
    }    
    else
    {
        echo "Error en usuario o contraseña<br/>";
        echo "<a href='index.php'>Intenta de nuevo </a>";
    }    


?>


</body>
</html>

