<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gallery_wasi_id');
            $table->string('id_image')->nullable();
            $table->string('url')->nullable($value = true);
            $table->string('description')->nullable($value = true);
            $table->integer('position')->nullable($value = true);
            $table->integer('property_id')->unsigned();//Identificador que indica el tipo de publicación en Google maps, ver la sección Publicación en Google maps de la propiedad.
            $table->foreign('property_id')->references('id')->on('properties')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('galleries');
    }
}
