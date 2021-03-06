<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiAlamatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_alamats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pegawai_id')->unsigned()->index();
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->string('jalan',25);
            $table->string('gang',25);
            $table->string('perumahan',25);
            $table->string('blok',5);
            $table->string('no',5);
            $table->string('rt',5);
            $table->string('rw',5);
            $table->string('kelurahan',25);
            $table->string('kecamatan',25);
            $table->string('kode_pos',5);
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
        Schema::drop('pegawai_alamats');
    }
}
