<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $livros = Livro::with('cliente')
            ->paginate(6);

        $busca = null;

        return view('livros.index', compact('livros', 'busca'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = \App\Models\Cliente::all();
        return view('livros.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validação dos dados
    $request->validate([
        'titulo' => 'required|string|max:255',
        'autor' => 'required|string|max:255',
        'cliente_id' => 'nullable|exists:clientes,id',
    ]);

    $data = $request->all();

    // Ajustar cliente_id para null caso seja string vazia
    if (empty($data['cliente_id'])) {
        $data['cliente_id'] = null;
    }

    \App\Models\Livro::create($data);

    return redirect()->route('livros.index')->with('success', 'Livro criado com sucesso!');
}


    /**
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        $livro->load('cliente');
        return view('livros.show', compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        $clientes = Cliente::all();
        return view('livros.edit', compact('livro', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livro $livro)
    {
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'cliente_id' => 'nullable|exists:clientes,id',
        ]);

        // Atualizar livro
        $livro->update([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'cliente_id' => $request->cliente_id,
        ]);

        return redirect()->route('livros.index')->with('success', 'Livro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();

        return redirect()->route('livros.index')->with('success', 'Livro excluído com sucesso!');
    }

    public function busca(Request $request)
    {
        $busca = $request->input('busca');

        $livros = Livro::with('cliente')
            ->whereRaw('LOWER(titulo) LIKE ?', ['%' . strtolower($busca) . '%'])
            ->orWhereRaw('LOWER(autor) LIKE ?', ['%' . $busca . '%'])
            ->paginate(6);

        return view('livros.index', compact('livros', 'busca'));
    }
}
