<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return view('contato');
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        return view('contato', compact('dados'));
    }
}
