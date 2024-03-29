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
        Schema::create('ligne_ventes', function (Blueprint $table) {
            $table->id();
            $table->integer('montant');
            $table->integer('quantite');
            $table->unsignedBigInteger('id_prod');
            $table->unsignedBigInteger('id_vente');
            $table->foreign('id_prod')->references('id')->on('produit');
            $table->foreign('id_vente')->references('id')->on('vente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligne_ventes');
    }
};
