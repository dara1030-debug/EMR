<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthExaminationRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_examination_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('physical_examination_id');
            $table->text('past_medical_history');
            $table->date('last_menstrual_period')->nullable();
            $table->string('menstrual_pattern');
            $table->text('family_history');
            $table->text('social_history');
            $table->string('vital_signs');
            $table->string('added_by');
            $table->string('updated_by');
            $table->string('assessment');
            $table->string('reccommendation');
            $table->date('examination_date');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        // Schema::table('health_examination_records', function (Blueprint $table) {
        //     $table->foreign('physical_examination_id')->references('id')->on('physical_examinations');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health_examination_records');
    }
}
