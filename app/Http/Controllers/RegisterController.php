<?php

namespace App\Http\Controllers;

use Stringable;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        //dd($request);//dd me muestra todos los valores que se envian a la db desde el controlador con el  metodo Request
       // dd($request->get('email'));//este metodo mustra el valor de la variable que envie al servidor

       //validando los campos del formulario antes de eviar la información a la db

       $this->validate($request, [
        'name' => 'required|max:20',
        'Username'=>'required|unique:users|min:4|max:10',
        'email'=>'required|unique:users|email|max:60',
        'password'=>'required|confirmed|min:8',

       ]);

       User::create([
            'name' =>Str::upper( $request->name) ,
            'Username' =>Str::upper($request->Username),
            'email' =>Str::upper($request->email ) ,
            'password' => Hash::make( $request->password)
       ]);

       //dd($request);
    }
}
