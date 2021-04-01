<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('imagem');
            $table->integer('nivel_acesso');
            $table->integer('status');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name' => 'Daniel Gomes albernaz',
            'imagem' => 'usuarios/photo_1615924246.png',
            'nivel_acesso' => 2,
            'status' => 1,
            'email' => 'daniel@daniel',
            'password' => '$2y$10$dvRAJuMjhaGwmuE8WwZ0IOSX7FZAO7GM9LiAEXn.eeiMIdL6t0dR.',
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
        Schema::dropIfExists('users');
    }
}
