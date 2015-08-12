<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaKesehatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_kesehatans', function (Blueprint $table) {
            $table->integer('siswa_id')->unsigned()->index();
            $table->foreign('siswa_id')->references('id')->on('siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('golongan_darah',2);
            $table->string('penyakit');
            $table->string('berat',2);
            $table->string('tinggi',2);
            // $table->string('kebutuhan_khusus_id')->unsigned()->index();
            // $table->foreign('kebutuhan_khusus_id')->references('id')->on('kebutuhan_khususes')->onUpdate('cascade');
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
        Schema::drop('siswa_kesehatans');
    }
}