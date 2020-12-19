<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <title>Document</title>
</head>
<body>
<h3> Lista de Empleados </h3>


<table class='table table-striped' >
   <tr>
       <th>Id</th>
       <th>Nombre</th>
       <th>Sueldo</th>
       <th></th>
       <th></th>
    </tr>

    @foreach ($empleados as $empleado)
     <tr>
        <td>{{$empleado->id}}</td> 
        <td>{{$empleado->nombre}}</td> 
        <td>{{$empleado->sueldo}}</td> 
        <td> <a href="empleados/detalle/{{$empleado->id}}">Detalle</a></td> 
        <td> <a href="empleados/editar/{{$empleado->id}}">Editar</a></td> 
        <td> <a href="empleados/eliminar/{{$empleado->id}}">Eliminar</a></td> 
        
                                   
      </tr>
      @endforeach 
    </table> 

</body>
</html>