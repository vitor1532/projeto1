<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index() {
    $usuario = "pato";
    $perfil = "TI";
    $empresa = "chico";

    $dados = [
        'usuario'=>$usuario,
        'perfil'=>$perfil,
        'empresa'=>$empresa
    ];

    return view('home', $dados);
  } 
};
