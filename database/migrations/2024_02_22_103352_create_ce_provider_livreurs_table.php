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
        Schema::create('ce_provider_livreurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('livreur_id');
            $table->unsignedBigInteger('provider_id');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->foreign('livreur_id')->references('id')->on('ce_livreurs');
            $table->foreign('provider_id')->references('id')->on('ce_providers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ce_provider_livreurs');
    }
};
