<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroRequest extends FormRequest
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
            'titulo' => 'string|required|max:50',
             'descricao' => 'string|required',
            'nota_do_leitor' => 'string|required',
             /*  'numero_de_paginas' => 'integer|required|numeric',
            'ano_de_lancamento' => 'date|required',
            'comeco_da_leitura' => 'date|required',
            'fim_da_leitura' => 'date|nullable', 
            'imagem_1' => 'image|max:2048|required|max:2048',
            'imagem_2' => 'image|max:2048|nullable',
            'nome_autor' => 'string|max:50|required',
            'foto_autor' => 'image|nullable|max:2048' */
        ];
    }
}
