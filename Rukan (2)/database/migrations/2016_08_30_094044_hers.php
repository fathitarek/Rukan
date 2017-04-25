<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Hers
 *
 * @author  The scaffold-interface created at 2016-08-30 09:40:44am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Hers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('hers',function (Blueprint $table){

        $table->increments('id');
        
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
        Schema::drop('hers');
    }
}
