<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrApprovalBidangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_approval_bidang', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fup_id')->constrained('fups')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('bidang_id')->constrained('bidangs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
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
        Schema::dropIfExists('tr_approval_bidang');
    }
}
