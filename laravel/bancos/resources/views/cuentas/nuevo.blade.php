
@include ('encabezado')

<h3>Nuevo Empleado</h3>
<form action="{{asset('/cuentas/guardar')}}" method="get">

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
    
@include ('pie')
