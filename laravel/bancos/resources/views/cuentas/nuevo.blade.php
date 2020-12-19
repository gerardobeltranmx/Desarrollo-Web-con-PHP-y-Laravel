<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Nuevo Empleado</h3>
<form action="{{asset('cuentas/guardar')}}" method="get">

           <div class ="form-group">
               <label for="nombre"> Nombre </label>
               <input type="text" class ="form-control" name="nombre" id="nombre">
           </div>
   
           <div class ="form-group">
               <label for="fechaNacimiento"> Fecha de Nacimiento </label>
               <input type="date" class ="form-control" name="fechaNacimiento" id="fechaNacimiento">
           </div>

           <div class ="form-group">
               <label for="correo">Correo Electronico </label>
               <input type="mail" class ="form-control" name="correo" id="correo">
           </div>

           <div class ="form-group">
               <input type="submit" class ="form-control" value="Enviar">
           </div>
</form>
    
</body>
</html>