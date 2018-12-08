<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->integer('id',20)->unique()->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('slug');
            $table->integer('type_dni')->unsigned();
            $table->foreign('type_dni')->references('id')->on('identifications')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');;
            $table->string('phone')->nullable();
            $table->string('landline')->nullable();
            $table->string('email',60)->unique();
            $table->string('address',100);
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('departament_id')->unsigned();
            $table->foreign('departament_id')->references('id')->on('departaments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('municipality_id')->unsigned();
            $table->foreign('municipality_id')->references('id')->on('municipalities')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('neighborhood_id')->unsigned();
            $table->foreign('neighborhood_id')->references('id')->on('neighborhoods')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->date('birthdate');
            $table->boolean('active')->default(false);   
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
        Schema::dropIfExists('clients');
    }
}
