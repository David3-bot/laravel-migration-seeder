<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->string("azienda");
            $table->string("stazione_partenza");
            $table->string("stazione_arrivo");
            $table->string("orario_partenza");
            $table->dateTime("orario_arrivo");
            $table->string("id_treno");
            $table->smallInteger("num_carrozze");
            $table->boolean("in_orario");
            $table->boolean("cancellato");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
