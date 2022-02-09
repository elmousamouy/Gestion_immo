<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->timestamps();
        });
        DB::table('roles')->insert(
            array(
                array(
                    'id' => '1',
                    'role'=>'Administrateur',
                ),
                array(
                    'id' => '2',
                    'role'=>'Financier',
                ),
                array(
                    'id' => '3',
                    'role'=>'Superviseur',
                )
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
        Schema::dropIfExists('roles');
    }
}
