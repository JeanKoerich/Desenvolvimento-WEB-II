<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalculoIMC extends Model
{
    public static function calcularIMC($peso, $altura)
    {

        if (!$peso || !$altura) {
            return "Informe altura e peso corretamente.";
        }

        $altura = str_replace(',', '.', $altura) / 100;

        if (!is_numeric($altura) || !is_numeric($peso) || $altura <= 0 || $peso <= 0) {
            return "Valores inválidos.";
        }

        $resultado = $peso / ($altura * $altura);

        return number_format($resultado, 2, ',', '');
    }
}
