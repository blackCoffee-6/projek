<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanggapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fup_id')->constrained('fups')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->string('tg_rnd')->nullable();
            $table->string('ch_regulasi')->nullable();
            $table->string('ch_registrasi')->nullable();
            $table->string('dok_perlukan')->nullable();
            $table->string('tg_nama')->nullable();
            $table->date('tg_date')->nullable();
            $table->string('gt_bidang')->nullable();
            $table->string('gt_nama')->nullable();
            $table->date('gt_date')->nullable();
            $table->string('bidang_tg')->nullable();
            $table->string('nama_tg')->nullable();
            $table->date('date_tg')->nullable();
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
        Schema::dropIfExists('tanggapan');
    }
}
