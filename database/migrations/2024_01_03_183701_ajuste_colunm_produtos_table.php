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
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {}
};
