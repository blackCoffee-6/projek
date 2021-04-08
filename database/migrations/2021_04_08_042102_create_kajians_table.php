<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKajiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kajians', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fup_id')->constrained('fups')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('ket_up');
            
            $table->string('ru_a');
            $table->string('ru_b');
            $table->string('ru_ket');

            $table->string('ri_a');
            $table->string('ri_b');
            $table->string('ri_ket');

            $table->string('st_a');
            $table->string('st_b');
            $table->string('st_ket');

            $table->string('me_a');
            $table->string('me_ket');

            $table->string('val_a');
            $table->string('val_b');
            $table->string('val_ket');

            $table->string('tr_a');
            $table->string('tr_b');
            $table->string('tr_ket');

            $table->string('pr_a');
            $table->string('pr_dok');
            $table->string('pr_ket');

            $table->string('dok_a');
            $table->string('dok_b');
            $table->string('dok_ket');

            $table->string('si_a');
            $table->string('si_ket');

            $table->string('kj_tambahan')->nullable();

            $table->string('severity1');
            $table->string('detec1');
            $table->string('occur1');

            $table->integer('getsev');
            $table->integer('getdet');
            $table->integer('getocc');
            $table->integer('result_dxo');

            $table->string('ch_kategori');
            $table->string('ch_status');

            $table->string('qa_nama');
            $table->date('qa_date');

            $table->string('asman_nama');
            $table->date('asman_date');

            $table->string('aq_nama');
            $table->date('aq_date');

            $table->string('ch_dis');
            
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
        Schema::dropIfExists('kajians');
    }
}
