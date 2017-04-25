<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Subjects
 *
 * @author  The scaffold-interface created at 2016-08-04 11:31:14am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Subjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('subjects',function (Blueprint $table){

        $table->increments('id');
        
        $table->date('date');
        
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
        Schema::drop('subjects');
    }
}
