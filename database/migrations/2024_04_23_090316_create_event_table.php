<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->string('nom',60);
            $table->string('prenom',60);
            $table->enum('sexe',['HOMME','FEMME']);
            $table->string('photo');
            $table->integer('score')->default(0)->unsigned();
            $table->foreignId('categorie_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('equipe_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->enum('sexe',['HOMME','FEMME']);
            $table->string('poids',20);
            $table->foreignId('evennement_sportif_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('event');
    }
}
