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
            $table->foreignId('fup_id')->constrained('fups');
            $table->string('ch_regulasi');
            $table->string('ch_registrasi');
            $table->string('dok_perlukan');
            $table->string('tg_nama');
            $table->date('tg_date');
            $table->string('gt_bidang');
            $table->string('gt_nama');
            $table->date('gt_date');
            $table->string('bidang_tg');
            $table->string('nama_tg');
            $table->date('date_tg');
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
