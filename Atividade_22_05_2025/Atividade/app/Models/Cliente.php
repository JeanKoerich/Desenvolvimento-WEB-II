<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'idade'];

    public function livros()
    {
        return $this->hasMany(Livro::class);
    }
}