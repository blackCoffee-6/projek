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
            $table->date('ru_rencana')->nullable();
            $table->date('ru_realisasi')->nullable();

            $table->text('ru_tlp2')->nullable();
            $table->text('ru_input2')->nullable();
            $table->text('ru_pic2')->nullable();
            $table->text('ru_dok2')->nullable();
            $table->date('ru_rencana2')->nullable();
            $table->date('ru_realisasi2')->nullable();

            $table->text('ri_tlp')->nullable();
            $table->text('ri_pic')->nullable();
            $table->text('ri_dok')->nullable();
            $table->text('ri_status')->nullable();
            $table->date('ri_rencana')->nullable();
            $table->date('ri_realisasi')->nullable();

            $table->text('st_tlp')->nullable();
            $table->text('st_pic')->nullable();
            $table->text('st_dok')->nullable();
            $table->text('st_status')->nullable();
            $table->date('st_rencana')->nullable();
            $table->date('st_realisasi')->nullable();

            $table->text('st_tlp2')->nullable();
            $table->text('st_pic2')->nullable();
            $table->text('st_dok2')->nullable();
            $table->text('st_status2')->nullable();
            $table->date('st_rencana2')->nullable();
            $table->date('st_realisasi2')->nullable();

            $table->text('me_tlp')->nullable();
            $table->text('me_pic')->nullable();
            $table->text('me_dok')->nullable();
            $table->text('me_status')->nullable();
            $table->date('me_rencana')->nullable();
            $table->date('me_realisasi')->nullable();

            $table->text('me_tlp2')->nullable();
            $table->text('me_pic2')->nullable();
            $table->text('me_dok2')->nullable();
            $table->text('me_status2')->nullable();
            $table->date('me_rencana2')->nullable();
            $table->date('me_realisasi2')->nullable();

            $table->text('val_tlp')->nullable();
            $table->text('val_pic')->nullable();
            $table->text('val_dok')->nullable();
            $table->text('val_status')->nullable();
            $table->date('val_rencana')->nullable();
            $table->date('val_realisasi')->nullable();

            $table->text('val_tlp2')->nullable();
            $table->text('val_pic2')->nullable();
            $table->text('val_dok2')->nullable();
            $table->text('val_status2')->nullable();
            $table->date('val_rencana2')->nullable();
            $table->date('val_realisasi2')->nullable();

            $table->text('val_tlp3')->nullable();
            $table->text('val_pic3')->nullable();
            $table->text('val_dok3')->nullable();
            $table->text('val_status3')->nullable();
            $table->date('val_rencana3')->nullable();
            $table->date('val_realisasi3')->nullable();

            $table->text('val_tlp4')->nullable();
            $table->text('val_pic4')->nullable();
            $table->text('val_dok4')->nullable();
            $table->text('val_status4')->nullable();
            $table->date('val_rencana4')->nullable();
            $table->date('val_realisasi4')->nullable();

            $table->text('val_tlp5')->nullable();
            $table->text('val_pic5')->nullable();
            $table->text('val_dok5')->nullable();
            $table->text('val_status5')->nullable();
            $table->date('val_rencana5')->nullable();
            $table->date('val_realisasi5')->nullable();

            $table->text('val_tlp6')->nullable();
            $table->text('val_pic6')->nullable();
            $table->text('val_dok6')->nullable();
            $table->text('val_status6')->nullable();
            $table->date('val_rencana6')->nullable();
            $table->date('val_realisasi6')->nullable();

            $table->text('val_tlp7')->nullable();
            $table->text('val_pic7')->nullable();
            $table->text('val_dok7')->nullable();
            $table->text('val_status7')->nullable();
            $table->date('val_rencana7')->nullable();
            $table->date('val_realisasi7')->nullable();

            $table->text('val_tlp8')->nullable();
            $table->text('val_pic8')->nullable();
            $table->text('val_dok8')->nullable();
            $table->text('val_status8')->nullable();
            $table->date('val_rencana8')->nullable();
            $table->date('val_realisasi8')->nullable();

            $table->text('val_tlp9')->nullable();
            $table->text('val_pic9')->nullable();
            $table->text('val_dok9')->nullable();
            $table->text('val_status9')->nullable();
            $table->date('val_rencana9')->nullable();
            $table->date('val_realisasi9')->nullable();

            $table->text('val_tlp10')->nullable();
            $table->text('val_pic10')->nullable();
            $table->text('val_dok10')->nullable();
            $table->text('val_status10')->nullable();
            $table->date('val_rencana10')->nullable();
            $table->date('val_realisasi10')->nullable();

            $table->text('val_tlp11')->nullable();
            $table->text('val_pic11')->nullable();
            $table->text('val_dok11')->nullable();
            $table->text('val_status11')->nullable();
            $table->date('val_rencana11')->nullable();
            $table->date('val_realisasi11')->nullable();

            $table->text('val_tlp12')->nullable();
            $table->text('val_pic12')->nullable();
            $table->text('val_dok12')->nullable();
            $table->text('val_status12')->nullable();
            $table->date('val_rencana12')->nullable();
            $table->date('val_realisasi12')->nullable();

            $table->text('val_tlp13')->nullable();
            $table->text('val_pic13')->nullable();
            $table->text('val_dok13')->nullable();
            $table->text('val_status13')->nullable();
            $table->date('val_rencana13')->nullable();
            $table->date('val_realisasi13')->nullable();
            
            $table->text('val_tlp14')->nullable();
            $table->text('val_pic14')->nullable();
            $table->text('val_dok14')->nullable();
            $table->text('val_status14')->nullable();
            $table->date('val_rencana14')->nullable();
            $table->date('val_realisasi14')->nullable();

            $table->text('tr_tlp')->nullable();
            $table->text('tr_pic')->nullable();
            $table->text('tr_dok')->nullable();
            $table->text('tr_status')->nullable();
            $table->date('tr_rencana')->nullable();
            $table->date('tr_realisasi')->nullable();

            $table->text('tr_tlp2')->nullable();
            $table->text('tr_pic2')->nullable();
            $table->text('tr_dok2')->nullable();
            $table->text('tr_status2')->nullable();
            $table->date('tr_rencana2')->nullable();
            $table->date('tr_realisasi2')->nullable();

            $table->text('tr_tlp3')->nullable();
            $table->text('tr_pic3')->nullable();
            $table->text('tr_dok3')->nullable();
            $table->text('tr_status3')->nullable();
            $table->date('tr_rencana3')->nullable();
            $table->date('tr_realisasi3')->nullable();

            $table->text('tr_tlp4')->nullable();
            $table->text('tr_pic4')->nullable();
            $table->text('tr_dok4')->nullable();
            $table->text('tr_status4')->nullable();
            $table->date('tr_rencana4')->nullable();
            $table->date('tr_realisasi4')->nullable();

            $table->text('tr_tlp5')->nullable();
            $table->text('tr_pic5')->nullable();
            $table->text('tr_dok5')->nullable();
            $table->text('tr_status5')->nullable();
            $table->date('tr_rencana5')->nullable();
            $table->date('tr_realisasi5')->nullable();

            $table->text('tr_tlp6')->nullable();
            $table->text('tr_pic6')->nullable();
            $table->text('tr_dok6')->nullable();
            $table->text('tr_status6')->nullable();
            $table->date('tr_rencana6')->nullable();
            $table->date('tr_realisasi6')->nullable();

            $table->text('pro_tlp')->nullable();
            $table->text('pro_input')->nullable();
            $table->text('pro_pic')->nullable();
            $table->text('pro_dok')->nullable();
            $table->text('pro_status')->nullable();
            $table->date('pro_rencana')->nullable();
            $table->date('pro_realisasi')->nullable();

            $table->text('pro_tlp2')->nullable();
            $table->text('pro_input2')->nullable();
            $table->text('pro_pic2')->nullable();
            $table->text('pro_dok2')->nullable();
            $table->text('pro_status2')->nullable();
            $table->date('pro_rencana2')->nullable();
            $table->date('pro_realisasi2')->nullable();

            $table->text('pro_tlp3')->nullable();
            $table->text('pro_input3')->nullable();
            $table->text('pro_pic3')->nullable();
            $table->text('pro_dok3')->nullable();
            $table->text('pro_status3')->nullable();
            $table->date('pro_rencana3')->nullable();
            $table->date('pro_realisasi3')->nullable();

            $table->text('dok_tlp')->nullable();
            $table->text('dok_pic')->nullable();
            $table->text('dok_dok')->nullable();
            $table->text('dok_status')->nullable();
            $table->date('dok_rencana')->nullable();
            $table->date('dok_realisasi')->nullable();

            $table->text('dok_tlp2')->nullable();
            $table->text('dok_pic2')->nullable();
            $table->text('dok_dok2')->nullable();
            $table->text('dok_status2')->nullable();
            $table->date('dok_rencana2')->nullable();
            $table->date('dok_realisasi2')->nullable();

            $table->text('dok_tlp3')->nullable();
            $table->text('dok_input3')->nullable();
            $table->text('dok_pic3')->nullable();
            $table->text('dok_dok3')->nullable();
            $table->text('dok_status3')->nullable();
            $table->date('dok_rencana3')->nullable();
            $table->date('dok_realisasi3')->nullable();

            $table->text('dok_tlp4')->nullable();
            $table->text('dok_input4')->nullable();
            $table->text('dok_pic4')->nullable();
            $table->text('dok_dok4')->nullable();
            $table->text('dok_status4')->nullable();
            $table->date('dok_rencana4')->nullable();
            $table->date('dok_realisasi4')->nullable();

            $table->text('dok_tlp5')->nullable();
            $table->text('dok_input5')->nullable();
            $table->text('dok_pic5')->nullable();
            $table->text('dok_dok5')->nullable();
            $table->text('dok_status5')->nullable();
            $table->date('dok_rencana5')->nullable();
            $table->date('dok_realisasi5')->nullable();

            $table->text('dok_tlp6')->nullable();
            $table->text('dok_input6')->nullable();
            $table->text('dok_pic6')->nullable();
            $table->text('dok_dok6')->nullable();
            $table->text('dok_status6')->nullable();
            $table->date('dok_rencana6')->nullable();
            $table->date('dok_realisasi6')->nullable();

            $table->text('dok_tlp7')->nullable();
            $table->text('dok_input7')->nullable();
            $table->text('dok_pic7')->nullable();
            $table->text('dok_dok7')->nullable();
            $table->text('dok_status7')->nullable();
            $table->date('dok_rencana7')->nullable();
            $table->date('dok_realisasi7')->nullable();

            $table->text('dok_tlp8')->nullable();
            $table->text('dok_input8')->nullable();
            $table->text('dok_pic8')->nullable();
            $table->text('dok_dok8')->nullable();
            $table->text('dok_status8')->nullable();
            $table->date('dok_rencana8')->nullable();
            $table->date('dok_realisasi8')->nullable();
            
            $table->text('dok_tlp9')->nullable();
            $table->text('dok_input9')->nullable();
            $table->text('dok_pic9')->nullable();
            $table->text('dok_dok9')->nullable();
            $table->text('dok_status9')->nullable();
            $table->date('dok_rencana9')->nullable();
            $table->date('dok_realisasi9')->nullable();

            $table->text('dok_tlp10')->nullable();
            $table->text('dok_input10')->nullable();
            $table->text('dok_pic10')->nullable();
            $table->text('dok_status10')->nullable();
            $table->date('dok_rencana10')->nullable();
            $table->date('dok_realisasi10')->nullable();

            $table->text('dk_tlp')->nullable();
            $table->text('dk_pic')->nullable();
            $table->text('dk_dok')->nullable();
            $table->text('dk_status')->nullable();
            $table->date('dk_rencana')->nullable();
            $table->date('dk_realisasi')->nullable();

            $table->text('sis_tlp')->nullable();
            $table->text('sis_pic')->nullable();
            $table->text('sis_dok')->nullable();
            $table->text('sis_status')->nullable();
            $table->date('sis_rencana')->nullable();
            $table->date('sis_realisasi')->nullable();

            $table->text('hasil_mitigasi')->nullable();
            $table->date('hasil_mitigasi_date')->nullable();
            $table->string('kop_tambahan')->nullable();
            $table->

            $table->text('mpm_nama');
            $table->date('mpm_date');

            $table->text('dis_setuju')->nullable();
            $table->text('dis_input')->nullable();

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
