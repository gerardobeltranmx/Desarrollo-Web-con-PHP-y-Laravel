<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cuenta;
class CuentasController extends Controller
{

    function index(){

        $cuentas = Cuenta::all();

        return view ('/cuentas/index',['cuentas'=>$cuentas]);

    }

    function nuevo (){

            return view('/cuentas/nuevo');

    }


    function guardar(Request $request){

         $cuenta = new Cuenta;

         $cuenta->nombre = $request->nombre;
         $cuenta->fechaNacimiento=$request->fechaNacimiento;
         $cuenta->correo = $request->correo;

         $cuenta->save();

         return Redirect('/cuentas');

    }
    //
}
