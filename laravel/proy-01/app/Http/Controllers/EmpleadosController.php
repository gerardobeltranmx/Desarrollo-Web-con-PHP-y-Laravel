<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
class EmpleadosController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados/index',['empleados' => $empleados]) ; 

    }
    public function detalle($id)
    {
        $empleado = Empleado::find($id);
        return view('/empleados/detalle',['empleado'=>$empleado]);
    }

    public function nuevo(){

        return view('/empleados/nuevo');
    }

    public function guardar(Request $request){

        try{
            $empleado = new Empleado;

            $empleado->nombre = $request->nombre;
            $empleado->fecha = $request->fecha;
            $empleado->sueldo = $request->sueldo;

            $empleado->save();

            return view('/mensaje', ['texto'=>'Empleado agregado satisfactoriamente!!!']); 

        }
        catch(Exception $e ){

            return view('/mensaje',$e->getMessage());

        }
    }

    public function editar($id)
    {
        $empleado = Empleado::find($id);
        return view('/empleados/editar',['empleado'=>$empleado]);
    }


    public function actualizar(Request $request, $id){

        try{
            
            $empleado = Empleado::find($id);

            $empleado->nombre = $request->nombre;
            $empleado->fecha = $request->fecha;
            $empleado->sueldo = $request->sueldo;

            $empleado->save();

            return view('/mensaje', ['texto'=>'Empleado actualizado satisfactoriamente!!!']); 

        }
        catch(Exception $e ){

            return view('/mensaje',$e->getMessage());

        }
    }

    public function eliminar($id)
    {
        $empleado = Empleado::find($id);
        return view('/empleados/eliminar',['empleado'=>$empleado]);
    }

    public function eliminarConfirmar($id){

        $empleado = Empleado::find($id);

        $empleado->delete();

        return  Redirect("/empleados");

    }
}
