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
    if (isset($_SESSION["auth"])){
        header("Location: menu.php");
    }
?>


<form action="verificar.php" method="POST" >
<table>
    <caption>Autentificación</caption>
    <tr><td>Usuario</td><td><input type="text" name="usuario"></td></tr>
    <tr><td>Contraseña</td><td><input type="password" name=" "></td></tr>
</table>
<input type="submit" value="Entrar">
</form>
</body>
</html>