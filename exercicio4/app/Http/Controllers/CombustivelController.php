<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculoCombustivel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CombustivelController extends Controller
{
    use HasFactory;

    public function combustivel()
    {
        return view('layout.combustivel');
    }

    public function calcular(Request $request)
    {
        $tipo = $request->input('tipo');
        $valorLitro = $request->input('valor');
        $distancia = $request->input('distancia');
        $consumo = $request->input('consumo');

        $gasto = CalculoCombustivel::calcularGasto($valorLitro, $distancia, $consumo);

        return view('layout.resultCombustivel', compact('tipo', 'gasto'));
    }
}
