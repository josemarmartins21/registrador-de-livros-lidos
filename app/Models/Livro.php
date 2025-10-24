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

    protected $guarded = []; // permite preenchimento em massa

    public static function buscarUltimoLivro(): array
    {
        return DB::select("SELECT  titulo, descricao FROM livros WHERE id = ?", [4]);
    }

    public static function buscarUltimosLivros()
    {
        return DB::select("SELECT * FROM livros LIMIT 5");
    }
}
