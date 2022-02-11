<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entreprise_id')->unsigned();
            $table->unsignedBigInteger('categorie_id')->unsigned();
            $table->string('referance')->nullable();
            $table->integer('duree_ammortissement')->nullable();
            $table->date('date_mise_enservice')->nullable();
            $table->float('prix_achat')->nullable();
            $table->string('factur')->nullable();
            $table->string('site')->nullable();
            $table->string('sous_site')->nullable();
            $table->string('emplacement')->nullable();
            $table->string('code_barre')->nullable();
            $table->string('designation')->nullable();
            $table->date('date_achat')->nullable();
            $table->string('fournisseur')->nullable();
            $table->string('n_serie')->nullable();
            $table->string('n_factur')->nullable();
            $table->float('quantitee')->nullable();
            $table->string('code_comptable')->nullable();
            $table->string('compte_comptable')->nullable();
            $table->string('n_bc')->nullable();
            $table->string('sous_famille')->nullable();
            $table->integer('affictation')->nullable();
            $table->string('description_famille')->nullable();
            $table->foreign('entreprise_id')
            ->references('id')
            ->on('entreprises')
            ->onDelete('cascade');
            $table->foreign('categorie_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
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
        Schema::dropIfExists('biens');
    }
}
