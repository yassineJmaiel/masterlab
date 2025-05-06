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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('master_id')->constrained()->onDelete('cascade');

            $table->string('annee_bac');
            $table->string('nature_licence');
            $table->string('etablissement');
            $table->string('annee_licence');
            $table->string('specialite');

            $table->string('moyenne_annee_1');
            $table->string('session_annee_1');
            $table->string('moyenne_annee_2');
            $table->string('session_annee_2');
            $table->string('moyenne_annee_3');
            $table->string('session_annee_3');

            $table->string('note_pfe');
            $table->integer('redoublement')->nullable();
            $table->integer('annees_blanches')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
