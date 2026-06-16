<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pedidos_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');        // erro 1 corrigido: era string, quantity é numérico
            $table->decimal('preco', 8, 2);       // erro 2 corrigido: faltava o segundo parâmetro de casas decimais
            $table->unsignedBigInteger('pedido_id');
            $table->foreign('pedido_id')
                ->references('id')
                ->on('pedidos');                  // erro 3 corrigido: era 'pedido', o nome correto da tabela é 'pedidos'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pedidos_items');
    }
};
