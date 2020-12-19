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
<h3> Operaciones de Cuenta </h3>

<table class='table table-striped' >
   <tr>
       <th>Id</th>
       <th>Tipo</th>
       <th>Cantidad</th>
       <th>Fecha</th>
       <th></th>
       <th></th>

    </tr>

    @foreach ($operaciones as $operacion)
     <tr>
        <td>{{$operacion->id}}</td> 
        <td>{{$operacion->tipo}}</td> 
        <td>{{$operacion->cantidad}}</td>
        <td>{{$operacion->fechamov}}</td>                   
      </tr>
      @endforeach 
    </table> 

</body>
</html>