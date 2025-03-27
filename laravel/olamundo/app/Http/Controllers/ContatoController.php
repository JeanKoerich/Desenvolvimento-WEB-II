<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Servidor;

class ContatoController extends Controller
{
    public function index(){
        $data['title'] = 'Contato';
        $data['cabecalho'] = 'Entre em contato';
        $servidor = new Servidor;
        $data['script'] = $servidor->getAtributo('SCRIPT_FILENAME');
        $data['data'] = $servidor->getData();
        return view('contato.contato', $data);
    }
}