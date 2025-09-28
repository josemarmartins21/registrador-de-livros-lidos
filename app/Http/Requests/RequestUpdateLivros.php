<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUpdateLivros extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
           return [
            'titulo' => 'string|nullable|max:30',
            'descricao' => 'string|nullable',
            'nota_do_leitor' => 'string|nullable',
            'numero_de_paginas' => 'integer|nullable|numeric',
            /* 'ano_de_lancamento' => 'date|nullble',
            'comeco_da_leitura' => 'date|nullble',
            'fim_da_leitura' => 'date|nullable',  */
            'imagem_1' => 'image|max:2048|nullable|max:2048',
            'imagem_2' => 'image|max:2048|nullable',
            'nome_autor' => 'string|max:50|nullable',
            'foto_autor' => 'image|nullable|max:2048'
        ];
    }
}
