<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->text('question_1')->nullable();
            $table->text('question_2')->nullable();
            $table->string('question_3')->nullable();
            $table->string('question_4')->nullable();
            $table->text('question_5')->nullable();
            $table->string('question_6')->nullable();
            $table->string('question_7')->nullable();
            $table->string('question_8')->nullable();
            $table->string('question_9')->nullable();
            $table->string('question_10')->nullable();
            $table->string('question_11')->nullable();
            $table->string('question_12')->nullable();
            $table->string('question_13')->nullable();
            $table->string('question_14')->nullable();
            $table->foreignId('registration_id')->constrained('registrations')->onDelete('cascade');;
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
        Schema::dropIfExists('surveys');
    }
}
