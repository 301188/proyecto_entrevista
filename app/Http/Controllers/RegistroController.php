<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App;
class RegistroController extends Controller
{
    //
    public function create(){
        $genero = App\Genero::all();
        $estado = App\Estadocivil::all();
        $interes = App\Interes::all();
        return view('auth.register',compact('genero','estado','interes'));
    }
}
