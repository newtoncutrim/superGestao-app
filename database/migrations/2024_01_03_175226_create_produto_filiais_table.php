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
        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->unsignedBigInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->timestamps();
            $table->decimal('preco_venda', 8,2);
            $table->integer('estoque_min');
            $table->integer('estoque_max');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produto_filiais', function(Blueprint $table){
            $table->dropForeign(['filial_id']);
            $table->dropForeign(['produto_id']);
            $table->dropColumn(['preco_venda', 'estoque_min', 'estoque_max']);
        });
        Schema::dropIfExists('produto_filiais');
    }
};
