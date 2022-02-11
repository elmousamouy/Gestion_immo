<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom_entreprises');
            $table->string('descriprtion')->nullable();
            $table->timestamps();
        });

        DB::table('entreprises')->insert(
            array(
                array(
                    'id' => 1,
                    'nom_entreprises'=>"EV Maroc",
                    'descriprtion' => "-",
                    
                    
                ),
                array(
                    'id' => 2,
                    'nom_entreprises'=>"AMEO",
                    'descriprtion' => "-",
                   
                ),
                array(
                    'id' => 3,
                    'nom_entreprises'=>"CDP",
                    'descriprtion' => "-",
                    
                ),
                array(
                    'id' => 4,
                    'nom_entreprises'=>"BICS",
                    'descriprtion' => "-",
                    
                ),
                array(
                    'id' => 5,
                    'nom_entreprises'=>"GRERN BIZ",
                    'descriprtion' => " -",
                    
                ),
                array(
                    'id' => 6,
                    'nom_entreprises'=>"LACQ",
                    'descriprtion' => " -",
                    
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
        Schema::dropIfExists('entreprises');
    }
}
