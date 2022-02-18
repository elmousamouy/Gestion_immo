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
                    'nom_cat'=>"immobilisation informatique",
                    'descriprtion' => "-",
                    
                    
                ),
                array(
                    'id' => 2,
                    'nom_cat'=>"immobilisation labo",
                    'descriprtion' => "-",
                   
                ),
                array(
                    'id' => 3,
                    'nom_cat'=>"immobilisation industrielle",
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
