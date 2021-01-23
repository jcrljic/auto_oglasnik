<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('price');
            // $table->unsignedBigInteger('buyer_id');
            // $table->foreign('buyer_id')->references('id')->on('users');
            $table->foreignId('buyer_id')
            ->nullable()
            ->constrained('users')
            ->onDelete('set null');
            // $table->unsignedBigInteger('seller_id');
            // $table->foreign('seller_id')->references('id')->on('users');
            $table->foreignId('seller_id')
            ->nullable()
            ->constrained('users')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
