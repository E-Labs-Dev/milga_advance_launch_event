<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuestionsToSurveyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surveys', function (Blueprint $table) {
            $table->string('question_7')->nullable();
            $table->string('question_8')->nullable();
            $table->string('question_9')->nullable();
            $table->string('question_10')->nullable();
            $table->string('question_11')->nullable();
            $table->string('question_12')->nullable();
            $table->string('question_13')->nullable();
            $table->string('question_14')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surveys', function (Blueprint $table) {
            $table->dropColumn(['question_7', 'question_8', 'question_9', 'question_10', 'question_11', 'question_12', 'question_13', 'question_14']);
        });
    }
}
