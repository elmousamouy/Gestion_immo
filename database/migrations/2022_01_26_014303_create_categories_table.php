<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('nom_cat');
            $table->string('descriprtion')->nullable();
            $table->timestamps();
        });
        DB::table('categories')->insert(
            array(
                array(
                    'id' => 1,
                    'nom_cat'=>"Immobilisation Informatique",
                    'descriprtion' => "-",
                    
                    
                ),
                array(
                    'id' => 2,
                    'nom_cat'=>"Immobilisation Labo",
                    'descriprtion' => "-",
                   
                ),

                array(
                    'id' => 3,
                    'nom_cat'=>"Immobilisation Industrielle",
                    'descriprtion' => "- ",
                    
                ),
                array(
                    'id' => 4,
                    'nom_cat'=>"Immobilisation Bâtiment",
                    'descriprtion' => "- ",
                    
                ),
                array(
                    'id' => 6,
                    'nom_cat'=>"Immobilisation Incorporelle",
                    'descriprtion' => "- ",
                    
                ),
                array(
                    'id' => 5,
                    'nom_cat'=>"Immobilisation Aménagement ",
                    'descriprtion' => "- ",
                    
                ),
                
          
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
