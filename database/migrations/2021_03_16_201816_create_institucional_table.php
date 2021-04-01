<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateInstitucionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucional', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('imagem')->nullable();
            $table->string('url')->nullable();
            $table->text('text')->nullable();
            $table->text('missao')->nullable();
            $table->text('valores')->nullable();
            $table->text('visao')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });

        DB::table('institucional')->insert([
            'title' => 'Albercamp',
            'imagem' => null,
            'url' => null,
            'text' => 'teste',
            'missao' => 'teste',
            'valores' => 'teste',
            'visao' => 'teste',
            'missao' => 'Goiânia',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institucional');
    }
}
