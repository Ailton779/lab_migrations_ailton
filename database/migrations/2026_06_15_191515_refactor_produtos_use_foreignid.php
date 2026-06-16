<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // foreignId()->constrained() é a sintaxe moderna do Laravel
        // Substitui unsignedBigInteger + foreign()->references()->on() em uma linha só
        // Mais legível e menos propenso a erros de digitação
        Schema::create('produtos_v2', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->decimal('preco', 8, 2);
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos_v2');
    }
};
