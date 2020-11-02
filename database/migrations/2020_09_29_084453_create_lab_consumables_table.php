<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabConsumablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_consumables', function (Blueprint $table) {
            $table->id();
            $table->string('hospital_id');
            $table->string('staff_id');
            $table->string('name');
            $table->string('make');
            $table->string('expDate');
            $table->string('type');
            $table->string('quantity');
            $table->string('unitPrice');
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
        Schema::dropIfExists('lab_consumables');
    }
}
