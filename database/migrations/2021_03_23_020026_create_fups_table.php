<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fups', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('user_id')->unsigned();
            // $table->foreignId('user_id')->references('id')->on('users');
            // $table->integer('approval_id')->unsigned();
            // $table->foreignId('approval_id')->references('id')->on('approvals');
            // $table->integer('bidang_id')->unsigned();
            // $table->foreignId('bidang_id')->references('id')->on('bidangs');
            // $table->integer('product_id')->unsigned();
            // $table->foreignId('product_id')->references('id')->on('products');
            $table->string('no_usulan');
            $table->date('date');
            $table->string('ket_ketentuan');
            $table->string('ket_usulan');
            $table->string('ket_alasan');
            $table->string('ch_sifat');
            $table->string('pic_asman');
            $table->string('pic_nama');
            $table->date('pic_date');
            $table->string('cip_manager');
            $table->string('cip_nama');
            $table->date('cip_date');
            $table->string('qa_asman');
            $table->string('qa_nama');
            $table->date('qa_date');
            $table->string('tanggapan');
            $table->string('bidang');
            $table->string('file');
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
        Schema::dropIfExists('fups');
    }
}
