<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontrolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontrols', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fup_id')->constrained('fups')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->text('ru_tlp')->nullable();
            $table->text('ru_pic')->nullable();
            $table->text('ru_dok')->nullable();
            $table->text('ru_status')->nullable();
            $table->date('ru_date')->nullable();
            $table->text('ru_rencana')->nullable();
            $table->text('ru_realisasi')->nullable();

            $table->text('ri_tlp')->nullable();
            $table->text('ri_pic')->nullable();
            $table->text('ri_dok')->nullable();
            $table->text('ri_status')->nullable();
            $table->date('ri_date')->nullable();
            $table->text('ri_rencana')->nullable();
            $table->text('ri_realisasi')->nullable();

            $table->text('st_tlp')->nullable();
            $table->text('st_pic')->nullable();
            $table->text('st_dok')->nullable();
            $table->text('st_status')->nullable();
            $table->date('st_date')->nullable();
            $table->text('st_rencana')->nullable();
            $table->text('st_realisasi')->nullable();

            $table->text('st_tlp2')->nullable();
            $table->text('st_pic2')->nullable();
            $table->text('st_dok2')->nullable();
            $table->text('st_status2')->nullable();
            $table->date('st_date2')->nullable();
            $table->text('st_rencana2')->nullable();
            $table->text('st_realisasi2')->nullable();

            $table->text('me_tlp')->nullable();
            $table->text('me_pic')->nullable();
            $table->text('me_dok')->nullable();
            $table->text('me_status')->nullable();
            $table->date('me_date')->nullable();
            $table->text('me_rencana')->nullable();
            $table->text('me_realisasi')->nullable();

            $table->text('me_tlp2')->nullable();
            $table->text('me_pic2')->nullable();
            $table->text('me_dok2')->nullable();
            $table->text('me_status2')->nullable();
            $table->date('me_date2')->nullable();
            $table->text('me_rencana2')->nullable();
            $table->text('me_realisasi2')->nullable();

            $table->text('val_tlp')->nullable();
            $table->text('val_pic')->nullable();
            $table->text('val_dok')->nullable();
            $table->text('val_status')->nullable();
            $table->date('val_date')->nullable();
            $table->text('val_rencana')->nullable();
            $table->text('val_realisasi')->nullable();

            $table->text('val_tlp2')->nullable();
            $table->text('val_pic2')->nullable();
            $table->text('val_dok2')->nullable();
            $table->text('val_status2')->nullable();
            $table->date('val_date2')->nullable();
            $table->text('val_rencana2')->nullable();
            $table->text('val_realisasi2')->nullable();

            $table->text('val_tlp3')->nullable();
            $table->text('val_pic3')->nullable();
            $table->text('val_dok3')->nullable();
            $table->text('val_status3')->nullable();
            $table->date('val_date3')->nullable();
            $table->text('val_rencana3')->nullable();
            $table->text('val_realisasi3')->nullable();

            $table->text('val_tlp4')->nullable();
            $table->text('val_pic4')->nullable();
            $table->text('val_dok4')->nullable();
            $table->text('val_status4')->nullable();
            $table->date('val_date4')->nullable();
            $table->text('val_rencana4')->nullable();
            $table->text('val_realisasi4')->nullable();

            $table->text('val_tlp5')->nullable();
            $table->text('val_pic5')->nullable();
            $table->text('val_dok5')->nullable();
            $table->text('val_status5')->nullable();
            $table->text('val_date5')->nullable();
            $table->text('val_rencana5')->nullable();
            $table->text('val_realisasi5')->nullable();

            $table->text('val_tlp6')->nullable();
            $table->text('val_pic6')->nullable();
            $table->text('val_dok6')->nullable();
            $table->text('val_status6')->nullable();
            $table->date('val_date6')->nullable();
            $table->text('val_rencana6')->nullable();
            $table->text('val_realisasi6')->nullable();

            $table->text('val_tlp7')->nullable();
            $table->text('val_pic7')->nullable();
            $table->text('val_dok7')->nullable();
            $table->text('val_status7')->nullable();
            $table->date('val_date7')->nullable();
            $table->text('val_rencana7')->nullable();
            $table->text('val_realisasi7')->nullable();

            $table->text('val_tlp8')->nullable();
            $table->text('val_pic8')->nullable();
            $table->text('val_dok8')->nullable();
            $table->text('val_status8')->nullable();
            $table->date('val_date8')->nullable();
            $table->text('val_rencana8')->nullable();
            $table->text('val_realisasi8')->nullable();

            $table->text('val_tlp9')->nullable();
            $table->text('val_pic9')->nullable();
            $table->text('val_dok9')->nullable();
            $table->text('val_status9')->nullable();
            $table->date('val_date9')->nullable();
            $table->text('val_rencana9')->nullable();
            $table->text('val_realisasi9')->nullable();

            $table->text('val_tlp10')->nullable();
            $table->text('val_pic10')->nullable();
            $table->text('val_dok10')->nullable();
            $table->text('val_status10')->nullable();
            $table->date('val_date10')->nullable();
            $table->text('val_rencana10')->nullable();
            $table->text('val_realisasi10')->nullable();

            $table->text('val_tlp11')->nullable();
            $table->text('val_pic11')->nullable();
            $table->text('val_dok11')->nullable();
            $table->text('val_status11')->nullable();
            $table->date('val_date11')->nullable();
            $table->text('val_rencana11')->nullable();
            $table->text('val_realisasi11')->nullable();

            $table->text('val_tlp12')->nullable();
            $table->text('val_pic12')->nullable();
            $table->text('val_dok12')->nullable();
            $table->text('val_status12')->nullable();
            $table->date('val_date12')->nullable();
            $table->text('val_rencana12')->nullable();
            $table->text('val_realisasi12')->nullable();

            $table->text('val_tlp13')->nullable();
            $table->text('val_pic13')->nullable();
            $table->text('val_dok13')->nullable();
            $table->text('val_status13')->nullable();
            $table->date('val_date13')->nullable();
            $table->text('val_rencana13')->nullable();
            $table->text('val_realisasi13')->nullable();
            
            $table->text('val_tlp14')->nullable();
            $table->text('val_pic14')->nullable();
            $table->text('val_dok14')->nullable();
            $table->text('val_status14')->nullable();
            $table->date('val_date14')->nullable();
            $table->text('val_rencana14')->nullable();
            $table->text('val_realisasi14')->nullable();

            $table->text('tr_tlp')->nullable();
            $table->text('tr_pic')->nullable();
            $table->text('tr_dok')->nullable();
            $table->text('tr_status')->nullable();
            $table->date('tr_date')->nullable();
            $table->text('tr_rencana')->nullable();
            $table->text('tr_realisasi')->nullable();

            $table->text('tr_tlp2')->nullable();
            $table->text('tr_pic2')->nullable();
            $table->text('tr_dok2')->nullable();
            $table->text('tr_status2')->nullable();
            $table->date('tr_date2')->nullable();
            $table->text('tr_rencana2')->nullable();
            $table->text('tr_realisasi2')->nullable();

            $table->text('tr_tlp3')->nullable();
            $table->text('tr_pic3')->nullable();
            $table->text('tr_dok3')->nullable();
            $table->text('tr_status3')->nullable();
            $table->date('tr_date3')->nullable();
            $table->text('tr_rencana3')->nullable();
            $table->text('tr_realisasi3')->nullable();

            $table->text('tr_tlp4')->nullable();
            $table->text('tr_pic4')->nullable();
            $table->text('tr_dok4')->nullable();
            $table->text('tr_status4')->nullable();
            $table->date('tr_date4')->nullable();
            $table->text('tr_rencana4')->nullable();
            $table->text('tr_realisasi4')->nullable();

            $table->text('tr_tlp5')->nullable();
            $table->text('tr_pic5')->nullable();
            $table->text('tr_dok5')->nullable();
            $table->text('tr_status5')->nullable();
            $table->date('tr_date5')->nullable();
            $table->text('tr_rencana5')->nullable();
            $table->text('tr_realisasi5')->nullable();

            $table->text('tr_tlp6')->nullable();
            $table->text('tr_pic6')->nullable();
            $table->text('tr_dok6')->nullable();
            $table->text('tr_status6')->nullable();
            $table->date('tr_date6')->nullable();
            $table->text('tr_rencana6')->nullable();
            $table->text('tr_realisasi6')->nullable();

            $table->text('pro_tlp')->nullable();
            $table->text('pro_pic')->nullable();
            $table->text('pro_dok')->nullable();
            $table->text('pro_status')->nullable();
            $table->date('pro_date')->nullable();
            $table->text('pro_rencana')->nullable();
            $table->text('pro_realisasi')->nullable();

            $table->text('pro_tlp2')->nullable();
            $table->text('pro_pic2')->nullable();
            $table->text('pro_dok2')->nullable();
            $table->text('pro_status2')->nullable();
            $table->date('pro_date2')->nullable();
            $table->text('pro_rencana2')->nullable();
            $table->text('pro_realisasi2')->nullable();

            $table->text('pro_tlp3')->nullable();
            $table->text('pro_pic3')->nullable();
            $table->text('pro_dok3')->nullable();
            $table->text('pro_status3')->nullable();
            $table->date('pro_date3')->nullable();
            $table->text('pro_rencana3')->nullable();
            $table->text('pro_realisasi3')->nullable();

            $table->text('dok_tlp')->nullable();
            $table->text('dok_pic')->nullable();
            $table->text('dok_dok')->nullable();
            $table->text('dok_status')->nullable();
            $table->text('dok_date')->nullable();
            $table->text('dok_rencana')->nullable();
            $table->text('dok_realisasi')->nullable();

            $table->text('dok_tlp2')->nullable();
            $table->text('dok_pic2')->nullable();
            $table->text('dok_dok2')->nullable();
            $table->text('dok_status2')->nullable();
            $table->text('dok_date2')->nullable();
            $table->text('dok_rencana2')->nullable();
            $table->text('dok_realisasi2')->nullable();

            $table->text('dok_tlp3')->nullable();
            $table->text('dok_pic3')->nullable();
            $table->text('dok_dok3')->nullable();
            $table->text('dok_status3')->nullable();
            $table->text('dok_date3')->nullable();
            $table->text('dok_rencana3')->nullable();
            $table->text('dok_realisasi3')->nullable();

            $table->text('dok_tlp4')->nullable();
            $table->text('dok_pic4')->nullable();
            $table->text('dok_dok4')->nullable();
            $table->text('dok_status4')->nullable();
            $table->text('dok_date4')->nullable();
            $table->text('dok_rencana4')->nullable();
            $table->text('dok_realisasi4')->nullable();

            $table->text('dok_tlp5')->nullable();
            $table->text('dok_pic5')->nullable();
            $table->text('dok_dok5')->nullable();
            $table->text('dok_status5')->nullable();
            $table->text('dok_date5')->nullable();
            $table->text('dok_rencana5')->nullable();
            $table->text('dok_realisasi5')->nullable();

            $table->text('dok_tlp6')->nullable();
            $table->text('dok_pic6')->nullable();
            $table->text('dok_dok6')->nullable();
            $table->text('dok_status6')->nullable();
            $table->text('dok_date6')->nullable();
            $table->text('dok_rencana6')->nullable();
            $table->text('dok_realisasi6')->nullable();

            $table->text('dok_tlp7')->nullable();
            $table->text('dok_pic7')->nullable();
            $table->text('dok_dok7')->nullable();
            $table->text('dok_status7')->nullable();
            $table->text('dok_date7')->nullable();
            $table->text('dok_rencana7')->nullable();
            $table->text('dok_realisasi7')->nullable();

            $table->text('dok_tlp8')->nullable();
            $table->text('dok_pic8')->nullable();
            $table->text('dok_dok8')->nullable();
            $table->text('dok_status8')->nullable();
            $table->text('dok_date8')->nullable();
            $table->text('dok_rencana8')->nullable();
            $table->text('dok_realisasi8')->nullable();
            
            $table->text('dok_tlp9')->nullable();
            $table->text('dok_pic9')->nullable();
            $table->text('dok_dok9')->nullable();
            $table->text('dok_status9')->nullable();
            $table->text('dok_date9')->nullable();
            $table->text('dok_rencana9')->nullable();
            $table->text('dok_realisasi9')->nullable();

            $table->text('sis_tlp')->nullable();
            $table->text('sis_pic')->nullable();
            $table->text('sis_dok')->nullable();
            $table->text('sis_status')->nullable();
            $table->date('sis_date')->nullable();
            $table->text('sis_rencana')->nullable();
            $table->text('sis_realisasi')->nullable();

            $table->text('hasil_mitigasi')->nullable();
            $table->date('hasil_mitigasi_date')->nullable();

            $table->text('mpm_nama');
            $table->date('mpm_date');

            $table->text('dis_setuju')->nullable();

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
        Schema::dropIfExists('kontrols');
    }
}
