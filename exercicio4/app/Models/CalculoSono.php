<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CalculoSono extends Model
{
    public static function recomendacao($idade, $sono)
    {

        if (!$idade || !$sono) {
            return "Informe idade e sono";
        }

        $idade = str_replace(',', '.', $idade);

        if (!is_numeric($idade) || !is_numeric($sono) || $idade < 0 || $sono < 0 || $idade > 130 || $sono > 24) {
            return "Valores inválidos";
        }

        if ($idade < 1) {
            if ($idade * 12 <= 3) {
                $min = 14;
                $max = 17;
            } else {
                $min = 12;
                $max = 15;
            }
        } elseif ($idade < 3) {
            $min = 11;
            $max = 14;
        } elseif ($idade < 6) {
            $min = 10;
            $max = 13;
        } elseif ($idade < 14) {
            $min = 9;
            $max = 11;
        } elseif ($idade < 18) {
            $min = 8;
            $max = 10;
        } elseif ($idade < 26) {
            $min = 7;
            $max = 9;
        } elseif ($idade < 65) {
            $min = 7;
            $max = 9;
        } else {
            $min = 7;
            $max = 8;
        }

        if ($sono < $min) {
            return "Dormiu menos do que o recomendado. Recomenda-se entre $min e $max horas de sono.";
        } elseif ($sono > $max) {
            return "Dormiu mais do que o recomendado. Recomenda-se entre $min e $max horas de sono.";
        } else {
            return "Tempo de sono está dentro da faixa recomendada de $min a $max horas.";
        }
    }
}
