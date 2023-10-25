<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('maison_location', function (Blueprint $table) {
            $table->id();
            $table->string('photoprincipal');
            $table->string('photos');
            $table->integer('garantie');
            $table->string('loyer');
            $table->string('description');
            $table->integer('nombre_piece');
            $table->integer('nombre_vue');
            $table->string('categorie');
            $table->string('devise');
            $table->string('commune');
            $table->interger('state');
            $table->date('sale_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maison_location');
    }
};
