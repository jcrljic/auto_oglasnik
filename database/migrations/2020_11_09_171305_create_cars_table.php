<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('price');
            $table->date('first_registration');
            $table->float('kilometer');
            $table->float('power');
            $table->string('cubic_capaticy');
            $table->string('colour');
            $table->text('interior_features');
            $table->string('make');
            $table->string('model');
            $table->string('vin_number');
            $table->string('location');
            $table->decimal('lat');
            $table->decimal('lng');
            $table->foreignId('vehicle_type_id')->constrained();
            $table->foreignId('engine_type_id')->constrained();
            $table->foreignId('transmission_type_id')->constrained();
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('users');






        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
