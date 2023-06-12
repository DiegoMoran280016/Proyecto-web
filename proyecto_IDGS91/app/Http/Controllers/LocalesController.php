<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locales;

class LocalesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar materias
        $depa = Locales::latest()->get();
        return view('Locales', compact('depa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //toma valores de formuralrios
        return view('altas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Alta  materias
        Locales::create([
            'direccion'=>request('direccion'),
            'universidad'=>request('universidad'),
            'precio'=>request('precio'),
            'descripcion'=>request('descripcion'),
            'telefono'=>request('telefono'),
            'correo'=>request('correo')
        ]);
        return redirect()->route('locales');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostrar
        //return $id;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //modificar 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //actualizar
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //eliminar materias
    }
}
