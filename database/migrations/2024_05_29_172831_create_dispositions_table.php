<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dispositions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('incoming_letter_id')->unsigned();
            $table->string('purpose');
            $table->text('content');
            $table->integer('status');
            $table->date('deadline');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('incoming_letter_id')->references('id')->on('incoming_letters');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispositions');
    }
};