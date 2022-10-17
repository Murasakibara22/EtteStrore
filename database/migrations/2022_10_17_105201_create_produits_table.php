<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libelle');
            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');
            $table->unsignedInteger('prix');
            $table->text('description');
            $table->unsignedInteger('qte_stock');
            $table->timestamps();

            $table->unsignedBigInteger('souscategorie_id');
            $table->foreign('souscategorie_id')
                ->references('id')
                ->on('souscategories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
