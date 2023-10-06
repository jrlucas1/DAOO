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
        schema::defaultStringLength(191);
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao');
            $table->float('preco');
            $table->integer('quantidade');
            $table->unsignedBigInteger('atividades_id');
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
