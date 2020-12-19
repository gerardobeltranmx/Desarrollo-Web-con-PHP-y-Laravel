<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Deposito a cuenta</h3>
<form action="{{asset('movimientos/deposito_guardar')}}" method="get">


            <div class ="form-group">
               <label for="id"> ID </label>
               <input type="text" readonly value='{{$cuenta->id}}' class ="form-control" name="id" id="id">
           </div> 
           <div class ="form-group">
               <label for="nombre"> Nombre </label>
               <input type="text" readonly value='{{$cuenta->nombre}}' class ="form-control" name="nombre" id="nombre">
           </div>
   
           <div class ="form-group">
               <label for="cantidad"> Cantidad a depositar </label>
               <input type="text" class ="form-control" name="cantidad" id="cantidad">
           </div>


           <div class ="form-group">
               <input type="submit" class ="form-control" value="Enviar">
           </div>
</form>
    
</body>
</html>