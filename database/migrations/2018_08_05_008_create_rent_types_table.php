<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentTypesTable extends Migration
{
    
    public function up()
    {
        Schema::create('rent_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('represents');
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
        Schema::dropIfExists('rent_types');
    }
}
