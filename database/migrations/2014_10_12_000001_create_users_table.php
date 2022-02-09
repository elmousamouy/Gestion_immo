<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id')->unsigned();
            $table->string('name');
            $table->string('fname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreign('role_id')
            ->references('id')
            ->on('roles')
            ->onDelete('cascade');
            $table->timestamps();
        });


        DB::table('users')->insert(
            array(
                array(
                    'id' => '1',
                    'role_id'=>1,
                    'name' => "med oussama elmousaouy",
                    'fname' => "med oussama elmousaouy",
                    "email" => "medoussama.elmousaouy@elephant-vert.com",
                    "password" =>  Hash::make("oussama2021"),
                    
                ),
                array(
                    'id' => 2,
                    'role_id'=>1,
                    'name' => "mohammed",
                    'fname' => "abidi",
                    "email" => "mohammed.el-abidi@elephant-vert.com",
                    "password" =>  Hash::make("Xwgpdz1ds5@"),
                ),
                array(
                    'id' => 3,
                    'role_id'=>1,
                    'name' => "rouissi ",
                    'fname' => "faical",
                    "email" => "faical.rouissi@elephant-vert.com",
                    "password" =>  Hash::make("Xwgpdz1ds5@"),
                ),
                array(
                    'id' => '5',
                    'role_id'=>1,
                    'name' => " bouslamti ",
                    'fname' => "  amine",
                    "email" => "amine.bouslamti@elephant-vert.com",
                    "password" =>  Hash::make("Lacq2021"),
                  
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
        Schema::dropIfExists('users');
    }
}
