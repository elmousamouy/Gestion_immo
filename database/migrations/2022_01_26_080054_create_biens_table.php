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
            $table->string('referance');
            $table->integer('duree_ammortissement');
            $table->date('date_mise_enservice');
            $table->float('prix_achat');
            $table->string('factur');
            $table->string('site');
            $table->string('sous_site');
            $table->string('emplacement');
            $table->string('code_barre');
            $table->string('designation');
            $table->date('date_achat');
            $table->string('fournisseur');
            $table->string('n_serie');
            $table->string('n_factur');
            $table->float('quantitee');
            $table->string('code_comptable');
            $table->string('compte_comptable');
            $table->string('n_bc');
            $table->string('sous_famille');
            $table->integer('affictation');
            $table->string('description_famille');
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
