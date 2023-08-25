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
        Schema::create('portfolio_model_technology', function (Blueprint $table) {

            $table->unsignedBigInteger('work_id');
            $table->foreign('work_id')->references('id')->on('portfolio_models');

            $table->unsignedBigInteger('tech_id');
            $table->foreign('tech_id')->references('id')->on('technologies');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_model_technology');
    }
};
