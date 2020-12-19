<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use App\Models\Movimiento;
class MovimientosController extends Controller
{
    public function deposito($id){

        $cuenta = Cuenta::find($id);

        return view('/movimientos/deposito', ['cuenta'=>$cuenta]);


    }

    public function deposito_guardar(Request $request){

        $movimiento = new Movimiento;

        $movimiento->idcuenta = $request->id;
        $movimiento->tipo = 'D';
        $movimiento->cantidad = $request->cantidad;
        $movimiento->fechamov = date('Y-m-d H:i:s');
    
        $movimiento->save();

        
        return Redirect('/cuentas');


    }


    public function operaciones($id){

        $operaciones = Movimiento::where('idcuenta', $id)->get();

        return view('/movimientos/operaciones', ['operaciones'=>$operaciones]);


    }


}
