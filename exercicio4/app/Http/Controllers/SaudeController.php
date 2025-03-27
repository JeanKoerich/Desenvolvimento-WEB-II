<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculoIMC;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SaudeController extends Controller
{
    use HasFactory;

    public function saude()
    {
        return view('layout.imc');
    }

    public function calcular(Request $request)
    {
        $valor = null;
        $peso = $request->input('peso');
        $altura = $request->input('altura');
        
        $valor = CalculoIMC::calcularIMC($peso, $altura);

        return view('layout.resultIMC', compact('valor'));
    }
}
