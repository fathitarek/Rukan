<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Feeds
 *
 * @author  The scaffold-interface created at 2016-08-04 12:07:16pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Feeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('feeds',function (Blueprint $table){

        $table->increments('id');
        
        $table->longText('article');
        
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
        Schema::drop('feeds');
    }
}
