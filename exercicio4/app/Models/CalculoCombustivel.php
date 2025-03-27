<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalculoCombustivel extends Model
{
    public static function calcularGasto($valorLitro, $distancia, $consumo)
    {
        if ($consumo <= 0) {
            return "Consumo inválido";
        }

        $litrosNecessarios = $distancia / $consumo;
        $resultado = $litrosNecessarios * $valorLitro;

        return number_format($resultado, 2, ',', '.');
    }
}
