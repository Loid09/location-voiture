<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string("name");
            $table->unsignedBigInteger("modele_id");
            $table->unsignedBigInteger("marque_id");
            $table->unsignedBigInteger("prix");
            $table->string("vitesse");
            $table->mediumText("description");
            $table->enum("etat", ["Render", "In Use", "Waiting"]);
            $table->timestamps();
            $table->foreign('modele_id')->references('id')->on('modeles');
            $table->foreign('marque_id')->references('id')->on('marques')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
