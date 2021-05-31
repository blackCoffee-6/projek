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
            
            $table->string('tg_bidang')->nullable();
            $table->string('tg_bidangs')->nullable();
            $table->string('tg_nama')->nullable();
            $table->date('tg_date')->nullable();

            $table->string('gt_bidang')->nullable();
            $table->string('gt_bidangs')->nullable();
            $table->string('gt_nama')->nullable();
            $table->date('gt_date')->nullable();

            $table->string('bidang_tg')->nullable();
            $table->string('bidang_tgs')->nullable();
            $table->string('nama_tg')->nullable();
            $table->date('date_tg')->nullable();

            $table->string('tg_bidang2')->nullable();
            $table->string('tg_bidangs2')->nullable();
            $table->string('tg_nama2')->nullable();
            $table->date('tg_date2')->nullable();
            
            $table->string('tg_bidang3')->nullable();
            $table->string('tg_bidangs3')->nullable();
            $table->string('tg_nama3')->nullable();
            $table->date('tg_date3')->nullable();
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
