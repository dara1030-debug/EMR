<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('perform_service_id');
            $table->string('prescription');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        // Schema::table('prescriptions', function (Blueprint $table) {
        //     $table->foreign('perform_service_id')->references('id')->on('perform_services');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
}
