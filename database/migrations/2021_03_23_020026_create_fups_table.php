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
            $table->id();

            $table->foreignId('user_id')->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->foreignId('bidang_id')->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->string('no_usulan')->nullable();
            $table->string('produk');
            $table->date('date')->nullable();
            $table->string('ket_ketentuan');
            $table->string('ket_usulan');
            $table->string('ket_alasan');
            $table->string('ch_sifat');
            $table->string('pic_asman');
            $table->string('pic_nama');
            $table->date('pic_date')->nullable();
            $table->string('cip_manager');
            $table->string('cip_nama');
            $table->date('cip_date')->nullable();
            $table->string('status')->nullable();
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
