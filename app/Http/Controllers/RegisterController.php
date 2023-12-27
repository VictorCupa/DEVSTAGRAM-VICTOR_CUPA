<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        dd($request);//dd me muestra todos los valores que se envian a la db desde el controlador con el  metodo Request
       // dd($request->get('email'));//este metodo mustra el valor de la variable que envie al servidor
    }
}
