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
        Schema::create('rule_gejala', function (Blueprint $table) {
            $table->id("id_rule_gejala");
            $table->integer("id_gejala");
            $table->integer("id_penyakit");
            $table->string("aturan");
            $table->string("hasil_aturan");
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
        Schema::dropIfExists('rule_gejala');
    }
};
