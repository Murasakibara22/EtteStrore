<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitCommandersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_commanders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('qte');
            $table->string('slug')->unique();
            $table->timestamps();

            $table->unsignedBigInteger('commande_id');
            $table->foreign('commande_id')
                ->references('id')
                ->on('commandes')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')
                ->references('id')
                ->on('produits')
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
        Schema::dropIfExists('produit_commanders');
    }
}
