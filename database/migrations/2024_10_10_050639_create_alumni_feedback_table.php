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
        Schema::create('alumni_feedback', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('current_organization');
            $table->string('current_designation');
            $table->integer('cd_id')->constrained('cd_name', 'id');
            $table->string('prog_studied_in_tmu');
            $table->integer('prog_passout_year');
            $table->string('cd_enroll_no');
            $table->string('email');
            $table->string('contact_no');
            $table->string('academic_year');
            $table->integer('overall_rating');
            $table->text('topics_beyond_syllabus');
            $table->text('topics_to_delete');
            $table->text('suggestions');
            $table->enum('q1', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q2', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q3', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q4', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q5', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q6', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q7', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q8', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q9', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q10', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_feedback');
    }
};
