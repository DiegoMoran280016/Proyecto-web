<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
   public function store()
    {
        request()->validate([
            'usuario'=>'required',
            'contraseña'=>'required'
        ]);
        return view('altas');

    }
}
