<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num = $_GET['tabla'];

    echo "<table class='table'>
    <thead class='thead-dark'>
    <tr>
    <th scope='col'>#</th>
    <th scope='col'></th>
    <th scope='col'></th>
    <th scope='col'>Resultado</th>
  </tr>
</thead>
<caption>Tabla del $num</caption>    
";
    for ($i=1; $i<=10; $i++){
        $resultado = $num * $i;     
        //echo $num . " x " . $i . " = " . $resultado . "<br/>";
        echo "<tr>
                <td>$num</td>
                <td> x </td>
                <td>$i</td>
                <td>$resultado<td>
              <tr>";
    }
    echo "</table>"; 
?>

</body>
</html>