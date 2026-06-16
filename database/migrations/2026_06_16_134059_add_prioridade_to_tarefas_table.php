<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // migration separada para adicionar prioridade — nunca editar migration original
        Schema::table('tarefas', function (Blueprint $table) {
            $table->string('prioridade')->default('media')->change();
        });
    }

    public function down(): void
    {
        Schema::table('tarefas', function (Blueprint $table) {
            $table->dropColumn('prioridade');
        });
    }
};
