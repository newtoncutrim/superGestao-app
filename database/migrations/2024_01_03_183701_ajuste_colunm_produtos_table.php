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
        //remover colunas da tabela produtos
        Schema::table('produtos', function(Blueprint $table){
            $table->dropColumn('estoque_max');
            $table->dropColumn('estoque_min');
            $table->dropColumn('preco_venda');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produtos', function(Blueprint $table){
            $table->integer('estoque_max');
            $table->integer('estoque_min');
            $table->decimal('preco_venda');
        });
    }
};
