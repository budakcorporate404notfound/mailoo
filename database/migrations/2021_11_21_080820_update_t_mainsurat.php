<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTMainsurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_mainsurat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asal_surat');
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            $table->string('perihal_surat');
            $table->string('pejabat_pengirim_surat');
            $table->string('surat_ditujukan_kepada');
            $table->string('pdf_surat');
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
        Schema::table('t_mainsurat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asal_surat');
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            $table->string('perihal_surat');
            $table->string('pejabat_pengirim_surat');
            $table->string('surat_ditujukan_kepada');
            $table->string('pdf_surat');
            $table->timestamps();
        });
    }
}