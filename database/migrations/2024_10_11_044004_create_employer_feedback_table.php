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
        Schema::create('employer_feedback', function (Blueprint $table) {
            $table->id();
            $table->string('name');
             $table->string('current_designation');
            $table->string('current_organization');
            $table->string('contact_no');
            $table->string('email');
            $table->integer('cd_id')->constrained('cd_name', 'id');
            $table->string('academic_year');
            $table->enum('q1', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q2', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q3', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->integer('overall_rating');
            $table->text('improve_syllabus');
            $table->text('new_content_existing_syllabus');
            $table->text('topics_to_delete');
            $table->text('addition_of_new_course');
            $table->text('any_emerging_trend');
            





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employer_feedback');
    }
};
