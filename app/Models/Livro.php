<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Autor;

class Livro extends Model
{
    protected $casts = [
        'fim_da_leitura' => 'datetime',
        'data_de_lancamento' => 'datetime',
        'comeco_da_leitura' => 'datetime',
    ];

    public static function ultimoLivro() {
        return DB::select('SELECT * FROM Livros ORDER BY id DESC LIMIT 1');
    }

    public static function ultimosCincoLivros() {
        return DB::select('SELECT * FROM Livros LIMIT 5');
    }

    public function autores() {
        return $this->belongsTo(Autor::class);
    }
}
