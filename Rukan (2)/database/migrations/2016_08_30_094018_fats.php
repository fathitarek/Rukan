<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Fats
 *
 * @author  The scaffold-interface created at 2016-08-30 09:40:18am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Fats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('fats',function (Blueprint $table){

        $table->increments('id');
        
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
        Schema::drop('fats');
    }
}
