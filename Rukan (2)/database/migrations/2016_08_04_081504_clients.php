<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Clients
 *
 * @author  The scaffold-interface created at 2016-08-04 08:15:04am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('clients',function (Blueprint $table){

        $table->increments('id');
        
        $table->integer('c_id');
        
        $table->String('name');
        
        /**
         * Foreignkeys section
         */
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
