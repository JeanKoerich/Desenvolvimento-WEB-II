<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Classe de objeto que retorna informações do servidor web.
class Servidor extends Model
{
    use HasFactory;

    //Retorna um atributo do servidor
    public function getAttribute($atributo)
    {
        return $_SERVER[$atributo];
    }

    //Retorna data e hora da execução do script no servidor
    public function getData(){
        date_default_timezone_set("America/New_York");
        return date("d/m/Y h:i:s a");
    }
}
