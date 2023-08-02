<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;
/*-----------------------------HomeController---------------------------*/
class HomeController extends Controller
{
    public function __invoke()
    {


        return view('home');
    }
    
}
/*---------------------------------------------------------------------*/


class LocalesController extends Controller
{
    public function __invoke()
    {
        $locales = Local::all();
        return view('locales', compact('locales'));
    }
    
}

class PuntosController extends Controller
{
    public function __invoke()
    {
        return view('puntos');
    }
    
}

class UniversidadesController extends Controller
{
    public function __invoke()
    {
        return view('universidades');
    }
    
}

class AltasController extends Controller
{
    public function __invoke()
    {
        return view('altas');
    }

    /*_______________________store________________________*/

    public function store(Request $request)
    {
        $local = new Local();
        
        $local->direccion = $request->direccion;
        $local->universidad = $request->universidad;
        $local->precio = $request->precio;
        $local->descripcion = $request->descripcion;
        $local->telefono = $request->telefono;
        $local->correo = $request->correo;

        $local->save();
        return redirect()->route('registros.show', $local);
    }
    /*___________________________________________________*/
}



class LoginController extends Controller
{
    public function __invoke()
    {
        return view('login');
    }
    
}


class RegistroController extends Controller
{
    public function index()
    {
        $locales = Local::all();
        return view('registros.showall', compact('locales'));
    }
    
    public function show(Local $local)
    {   
        return view('registros.show', compact('local'));
    }

    public function edit(Local $local)
    {   
        return view('registros.edit', compact('local'));
    }

    public function update(Request $request,Local $local)
    {   
        $local->direccion = $request->direccion;
        $local->universidad = $request->universidad;
        $local->precio = $request->precio;
        $local->descripcion = $request->descripcion;
        $local->telefono = $request->telefono;
        $local->correo = $request->correo;

        $local->save();
        return redirect()->route('registros.show', $local);
    }

    public function destroy(Local $local)
    {
        $local->delete();
        return redirect()->route('registros.index');
    }
    
}