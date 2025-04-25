<?php

namespace App\Http\Controllers;

use App\Models\TipoContato;
use Illuminate\Http\Request;

class TipoContatoController extends Controller
{
    public function index()
    {
        $tipoContato = TipoContato::all();

        return view('tipoContato.index', compact('tipoContato'));
    }

    public function create()
    {
        return view('tipoContato.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:500',
        ]);

        $tipoContato = new TipoContato();
        $tipoContato ->nome = $request->input('nome');
        $tipoContato ->descricao = $request->input('descricao');
        if ($tipoContato ->save()) {
            return redirect()->route('tipoContato.index')->with('success', 'Tipo contato criado com sucesso!');
        }
    }

    public function show(string $id)
    {
        $tipoContato = TipoContato::findOrFail($id);
        return view('tipoContato.show', compact('tipoContato'));
    }

    public function edit(string $id)
    {
        $tipoContato = TipoContato::findOrFail($id);
        return view('tipoContato.edit', compact('tipoContato'));  
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:500',
        ]);

        $tipoContato = TipoContato::findOrFail($id);
        $tipoContato->nome = $request->input('nome');
        $tipoContato->descricao = $request->input('descricao');
        if ($tipoContato->save()) {
            return redirect()->route('tipoContato.index')->with('success', 'Tipo contato criado com sucesso!');
        }
    }

    public function destroy(string $id)
    {
        $tipoContato = TipoContato::FindorFail($id);
        if ($tipoContato->delete()) {
            return redirect()->route("tipoContato.index")->with('success', 'Tipo contato excluído');
        }
    }
}
