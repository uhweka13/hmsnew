<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('hType');
            $table->string('hName');
            $table->string('hEmail')->unique();
            $table->string('hPhone');
            $table->string('hState');
            $table->string('hWebsite');
            $table->string('hEstablish');
            $table->string('hLocation');
            $table->string('hStartDate')->nullable();
            $table->string('hEndDate')->nullable();
            $table->string('hLogo');
            $table->string('hStatus');
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
        Schema::dropIfExists('hospitals');
    }
}
