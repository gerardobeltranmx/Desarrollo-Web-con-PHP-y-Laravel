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
}
