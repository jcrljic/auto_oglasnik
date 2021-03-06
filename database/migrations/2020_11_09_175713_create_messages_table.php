<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('message_body');
            // $table->unsignedBigInteger('from_id');
            // $table->foreign('from_id')->references('id')->on('users');
            $table->foreignId('from_id')
            ->nullable()
            ->constrained('users')
            ->onDelete('set null');
            // $table->unsignedBigInteger('to_id');
            // $table->foreign('to_id')->references('id')->on('users');
            $table->foreignId('to_id')
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
        Schema::dropIfExists('messages');
    }
}
