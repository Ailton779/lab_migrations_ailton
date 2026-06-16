<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            $table->string('status');
            $table->string('prioridade');
            $table->foreignId('projeto_id')->constrained('projetos')->onDelete('cascade');
            // restrict: colaborador não pode ser removido se tiver tarefas atribuídas
            $table->foreignId('colaborador_id')->constrained('colaboradores')->onDelete('restrict');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
