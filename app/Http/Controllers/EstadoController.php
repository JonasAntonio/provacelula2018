<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = Estado::all();
        return view('main-estado', ['estados' => $estados]);
    }

    public function store(Request $request)
    {
        $estado = new Estado();
        $estado -> sigla = $request -> sigla;
        $estado -> nome = $request -> nome;
        $estado -> save();
        return redirect() -> route('estado.index') -> with('message', 'Estado Cadastrado com sucesso!');
    }

    public function create()
    {
        return view('include-estado');
    }

    public function edit($id)
    {
        $estado = Estado::findOrFail($id);
        return view('edit-estado', ['estado' => $estado]);
    }

    public function update(Request $request, $id)
    {
        $estado = Estado::findOrFail($id);
        $estado -> sigla = $request -> sigla;
        $estado -> nome = $request -> nome;
        $estado -> update();
        return redirect() -> route('estado.index') -> with('message', 'Estado atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $estado = Estado::findOrFail($id);
        $estado -> delete();
        return redirect() -> route('estado.index') -> with('message', 'Estado excluído com sucesso!');
    }

    public function search(Request $request, $termo){

    }

}
