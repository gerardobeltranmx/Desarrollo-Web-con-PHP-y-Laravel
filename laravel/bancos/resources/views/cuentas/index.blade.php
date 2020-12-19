
@include ('encabezado')

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
        <td> <a href="movimientos/deposito/{{$cuenta->id}}">Depositar</a></td> 
        <td> <a href="movimientos/operaciones/{{$cuenta->id}}">Operaciones</a></td> 

        
                                   
      </tr>
      @endforeach 
    </table> 


  @include('pie')