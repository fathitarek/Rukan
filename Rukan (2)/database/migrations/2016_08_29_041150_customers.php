<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Customers
 *
 * @author  The scaffold-interface created at 2016-08-29 04:11:50pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('customers',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('email');
        
        $table->integer('mobile');
        
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
        Schema::drop('customers');
    }
}
