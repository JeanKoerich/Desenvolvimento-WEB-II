<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculoSono;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class SonoController extends Controller
{
    use HasFactory;

    public function sono()
    {
        return view('layout.sono');
    }

    public function calcular(Request $request)
    {
        $sono = null;
        $data_nascimento = $request->input('data_nascimento');
        $sono = $request->input('sono');

        $idade = Carbon::parse($data_nascimento)->age;

        $sono = CalculoSono::recomendacao($idade, $sono);

        return view('layout.resultSono', compact('sono'));
    }
}
