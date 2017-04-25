<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Students
 *
 * @author  The scaffold-interface created at 2016-08-04 08:35:46am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('students',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('subject');
        
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
        Schema::drop('students');
    }
}
