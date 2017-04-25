<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Courses
 *
 * @author  The scaffold-interface created at 2016-08-04 11:22:15am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Courses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('courses',function (Blueprint $table){

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
        Schema::drop('courses');
    }
}
