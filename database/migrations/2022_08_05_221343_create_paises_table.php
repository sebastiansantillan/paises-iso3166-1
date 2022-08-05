<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('paises', function (Blueprint $table) {
            $table->id();
            $table->string('iso3166_numeric',3);
            $table->string('iso3166_1_alpha_2',2);
            $table->string('iso3166_1_alpha_3',3);
            $table->string('nombre',60);
            $table->string('nombre_abreviado',60);
        });
    }
};
