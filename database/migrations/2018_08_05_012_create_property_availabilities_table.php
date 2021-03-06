<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyAvailabilitiesTable extends Migration
{
    
    public function up()
    {
        Schema::create('property_availabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('it_represents');
            $table->string('label');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_availabilities');
    }
}
