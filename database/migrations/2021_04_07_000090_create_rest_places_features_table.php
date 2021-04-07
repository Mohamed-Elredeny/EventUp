<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestPlacesFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rest_places_features', function (Blueprint $table) {
            $table->id();
            $table->string('feature');
 
            $table->unsignedBigInteger('rest_place_id');
            $table->foreign('rest_place_id')->references('id')->on('rest_places');
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
        Schema::dropIfExists('rest_places_features');
    }
}
