<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table -> string('title');
            $table -> string('name');
            $table -> string('panggilan');
            $table -> string('kota');
            $table -> string('kuliah');
            $table -> string('alamat');
            $table -> string('ttl');
            $table -> string('nim');
            $table -> string('jurusan');
            $table -> string('agama');
            $table -> string('umur');
            $table -> string('email');
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
        Schema::dropIfExists('biodatas');
    }
};
