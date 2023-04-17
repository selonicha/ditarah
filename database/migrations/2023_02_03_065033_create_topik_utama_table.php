<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopikUtamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topik_utama', function (Blueprint $table) {
            $table->string('id');
            $table->string('judul');
            $table->string('penulis');
            $table->longText('penjelasan');
            $table->string('file')->nullable();
            // $table->foreignId('user_id_now')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('topik_utama');
    }
}
