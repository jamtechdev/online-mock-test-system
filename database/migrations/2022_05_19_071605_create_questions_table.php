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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('summary');
            $table->unsignedBigInteger('technology_id');
<<<<<<<< HEAD:database/migrations/2022_05_19_071605_create_questions_table.php
            $table->enum('status',['active','inactive','pending']);
            $table->enum('level',['easy','medium','hard']);
            $table->foreign('technology_id')->references('id')->on('technologies');
========
            $table->foreign('technology_id')->references('id')->on('technologies');
            $table->string('question');
            $table->string('level');
            $table->string('answer');
>>>>>>>> 5fb1c7080ba7511b6f1e3f5dac2e4e12859ee76c:database/migrations/2022_05_18_122115_create_questions_table.php
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
        Schema::dropIfExists('questions');
    }
};
