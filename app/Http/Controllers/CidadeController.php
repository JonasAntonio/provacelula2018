<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estado;
use App\Cidade;

class CidadeController extends Controller
{

    public function index()
    {
        $cidades = Cidade::all();
        return view('main-cidade', ['cidades' => $cidades]);
    }

    public function store(Request $request)
    {
        $cidade = new Cidade();
        //$estados = Estado::all();
        $cidade -> codigo = $request -> codigo;
        $cidade -> nome = $request -> nome;
        $cidade -> sigla_estado = $request -> sigla_estado;
        $cidade -> save();
        return redirect() -> route('cidade.index') -> with('message', 'Cidade Cadastrada com sucesso!');
    }

    public function create()
    {
        return view('include-cidade');
    }

    public function edit($id)
    {
        $cidade = Cidade::findOrFail($id);
        return view('edit-cidade', ['cidade' => $cidade]);
    }

    public function update(Request $request, $id)
    {
        $cidade = Cidade::findOrFail($id);
        $cidade -> codigo = $request -> codigo;
        $cidade -> nome = $request -> nome;
        $cidade -> sigla_estado = $request -> sigla_estado;
        $cidade -> update();
        return redirect() -> route('cidade.index') -> with('message', 'Cidade atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $cidade = Cidade::findOrFail($id);
        $cidade -> delete();
        return redirect() -> route('cidade.index') -> with('message', 'Cidade excluída com sucesso!');
    }

    public function findEstado($estado){
        $estado = Estado::findOrFail($estado);
        return $estado;
    }
}
