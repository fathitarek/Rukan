<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Zezos
 *
 * @author  The scaffold-interface created at 2016-08-04 01:03:54pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Zezos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('zezos',function (Blueprint $table){

        $table->increments('id');
        
        $table->date('article');
        
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
        Schema::drop('zezos');
    }
}
