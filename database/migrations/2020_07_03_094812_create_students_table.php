<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',60)->nullable();
            $table->string('registration_number_college',60)->nullable();
            $table->string('registration_number_university',60)->nullable();
            $table->string('address',60)->nullable();

            $table->string('semester_one_subject_one',60)->nullable();
            $table->string('semester_one_subject_two',60)->nullable();
            $table->string('semester_one_subject_three',60)->nullable();
            $table->string('semester_one_subject_four',60)->nullable();
            $table->string('semester_one_subject_five',60)->nullable();
            $table->string('semester_one_subject_six',60)->nullable();

            $table->string('semester_two_subject_one',60)->nullable();
            $table->string('semester_two_subject_two',60)->nullable();
            $table->string('semester_two_subject_three',60)->nullable();
            $table->string('semester_two_subject_four',60)->nullable();
            $table->string('semester_two_subject_five',60)->nullable();
            $table->string('semester_two_subject_six',60)->nullable();

            $table->string('semester_three_subject_one',60)->nullable();
            $table->string('semester_three_subject_two',60)->nullable();
            $table->string('semester_three_subject_three',60)->nullable();
            $table->string('semester_three_subject_four',60)->nullable();
            $table->string('semester_three_subject_five',60)->nullable();
            $table->string('semester_three_subject_six',60)->nullable();

            $table->string('semester_four_subject_one',60)->nullable();
            $table->string('semester_four_subject_two',60)->nullable();
            $table->string('semester_four_subject_three',60)->nullable();
            $table->string('semester_four_subject_four',60)->nullable();
            $table->string('semester_four_subject_five',60)->nullable();
            $table->string('semester_four_subject_six',60)->nullable();

            $table->string('semester_five_subject_one',60)->nullable();
            $table->string('semester_five_subject_two',60)->nullable();
            $table->string('semester_five_subject_three',60)->nullable();
            $table->string('semester_five_subject_four',60)->nullable();
            $table->string('semester_five_subject_five',60)->nullable();
            $table->string('semester_five_subject_six',60)->nullable();

            $table->string('semester_six_subject_one',60)->nullable();
            $table->string('semester_six_subject_two',60)->nullable();
            $table->string('semester_six_subject_three',60)->nullable();
            $table->string('semester_six_subject_four',60)->nullable();
            $table->string('semester_six_subject_five',60)->nullable();
            $table->string('semester_six_subject_six',60)->nullable();

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
        Schema::dropIfExists('students');
    }
}
