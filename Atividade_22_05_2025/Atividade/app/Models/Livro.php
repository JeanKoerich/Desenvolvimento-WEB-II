<?php

namespace App\Models;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['titulo', 'autor', 'cliente_id'];
    
        public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
