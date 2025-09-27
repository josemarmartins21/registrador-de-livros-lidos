<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo', 30);
            $table->text('descricao');
            $table->text('nota_do_leitor');
            $table->integer('numero_de_paginas');
            $table->date('data_de_lancamento');
            $table->date('comeco_da_leitura');
            $table->date('fim_da_leitura');
            $table->string('imagem_1');
            $table->string('imagem_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
