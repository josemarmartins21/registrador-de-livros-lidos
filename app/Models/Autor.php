<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Livro;

class Autor extends Model
{
    protected $table = 'autores';
    protected $casts = [
        'data_de_nascimento' => 'datetime'
    ];

    public function livros()
    {
        return $this->hasMany(Livro::class);
    }
}
