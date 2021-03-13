<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('imagem')->nullable();
            $table->string('vazao')->nullable();
            $table->string('motor')->nullable();
            $table->string('consumo')->nullable();
            $table->string('abertura')->nullable();
            $table->string('reservatorio')->nullable();
            $table->text('text')->nullable();
            $table->integer('status')->nullable();
            $table->dateTime('begin_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
