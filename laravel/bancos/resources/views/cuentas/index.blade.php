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
<h3> Lista de Cuentas </h3>

<a href="cuentas/nuevo">Nueva Cuenta</a>
<table class='table table-striped' >
   <tr>
       <th>Id</th>
       <th>Nombre</th>
       <th>correo</th>
       <th></th>
       <th></th>
       <th></th>

    </tr>

    @foreach ($cuentas as $cuenta)
     <tr>
        <td>{{$cuenta->id}}</td> 
        <td>{{$cuenta->nombre}}</td> 
        <td>{{$cuenta->correo}}</td> 
        <td> <a href="cuentas/detalle/{{$cuenta->id}}">Detalle</a></td> 
        <td> <a href="cuentas/editar/{{$cuenta->id}}">Editar</a></td> 
        <td> <a href="cuentas/eliminar/{{$cuenta->id}}">Eliminar</a></td> 
        <td> <a href="movimientos/retiro/{{$cuenta->id}}">Retirar</a></td> 
        <td> <a href="movimientos/depositos/{{$cuenta->id}}">Depositar</a></td> 

        
                                   
      </tr>
      @endforeach 
    </table> 

</body>
</html>