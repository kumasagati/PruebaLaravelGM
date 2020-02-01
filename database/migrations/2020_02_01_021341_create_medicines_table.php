<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("med_name", 100);
            $table->enum("med_pharmaceutical_form", ["Sólida", "Semisólida", "Líquida", "Gaseosa"]);
            $table->text("med_description");
            $table->string("med_actives_components");
            $table->text("med_indications");
            $table->text("med_dosage");
            $table->text("med_contraindications");
            $table->text("med_adverse_reactions");
            $table->text("med_pharmacokinetics");
            $table->string("med_image", 200);
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
        Schema::dropIfExists('medicines');
    }
}
