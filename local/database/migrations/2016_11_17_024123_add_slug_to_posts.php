<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function($table) { 
            $table->string('title');
            $table->string('body');
            $table->string('slug')->unique()->after('body');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function ($table){
             $table->dropColumn('title');
            $table->dropColumn('body');
            $table->dropColumn('slug');



        });
    }
}
