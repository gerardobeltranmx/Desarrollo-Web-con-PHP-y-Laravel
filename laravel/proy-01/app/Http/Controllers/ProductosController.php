<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
   
   public function index(){

        return view('productos/index');

   }
 
   
   public function detalle(){

    return view('productos/detalle');

}
    //
}
