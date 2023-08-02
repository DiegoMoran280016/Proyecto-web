<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalesController extends Controller
{
    public function index()
    {
        return view('locales.locales');
    }

    public function store()
    {
        return view('locales.altas');
    }

    public function show()
    {
        return view('locales.locales');
    }

    
}
