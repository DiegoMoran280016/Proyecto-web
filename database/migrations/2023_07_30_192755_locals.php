<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->text('direccion');
                $table->text('universidad');
                $table->text('precio');
                $table->text('descripcion');
                $table->text('telefono');
                $table->text('correo');
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
        //Schema::dropIfExists('locals');
    }
};
