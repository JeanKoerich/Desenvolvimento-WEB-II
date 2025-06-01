<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::with('livros')
            ->paginate(6);

        $busca = null;

        // Return the view with the contacts data
        return view('clientes.index', compact('clientes', 'busca'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação apenas para nome e idade
        $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|numeric|min:0',
        ]);

        // Criar cliente apenas com nome e idade
        $cliente = Cliente::create([
            'nome' => $request->nome,
            'idade' => $request->idade,
        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso!');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer|min:0',
            'livro' => 'nullable|string|max:200',
        ]);

        $cliente->update([
            'nome' => $request->nome,
            'idade' => $request->idade,
        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::FindorFail($id);
        if ($cliente->delete()) {
            return redirect()->route("clientes.index")->with('success', 'Cliente excluído');
        }
    }

    public function busca(Request $request)
    {
        $busca = $request->input('busca');

        $clientes = Cliente::with('livros')
            ->where(DB::raw('LOWER(nome)'), 'like', '%' . strtolower($busca) . '%')
            ->orWhere('idade', 'like', '%' . $busca . '%')
            ->paginate(6);

        return view('clientes.index', compact('clientes', 'busca'));
    }
}
