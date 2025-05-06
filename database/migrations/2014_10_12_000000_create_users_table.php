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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('prenom_pere')->nullable();
            $table->string("sexe")->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('gouvernorat_naissance')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('etat_civil')->nullable();
            $table->string('cin')->nullable();
            $table->string('adresse')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('telephone')->nullable();
            $table->string('licence')->nullable();
            $table->string('licence_certificat')->nullable();
            $table->string('master')->nullable();
            $table->string('master_certificat')->nullable();
            $table->string('interets')->nullable();
            $table->string('note')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('role');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
