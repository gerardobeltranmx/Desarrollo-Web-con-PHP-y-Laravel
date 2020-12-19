<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>Eliminar Empleado</h3>

    <table class='table table-striped'>
    <tr><td>Nombre</td><td>{{$empleado->nombre}}</td></tr>
    <tr><td>Fecha</td><td>    {{$empleado->fecha}}</td></tr>
    <tr><td>Sueldo</td><td>{{$empleado->sueldo}}</td></tr>
    </table>
    <a href="../../empleados/eliminarConfirmar/{{$empleado->id}}">Si</a>
    <a href="../../empleados">No</a>
    
</body>
</html>