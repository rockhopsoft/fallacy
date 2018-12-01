<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-migration.blade.php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFallacyTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
    	Schema::create('AB_Link', function(Blueprint $table)
		{
			$table->increments('LnkID');
			$table->string('LnkVersionAB')->nullable();
			$table->integer('LnkSubmissionProgress')->nullable();
			$table->string('LnkIPaddy')->nullable();
			$table->string('LnkTreeVersion')->nullable();
			$table->string('LnkUniqueStr')->nullable();
			$table->integer('LnkUserID')->unsigned()->nullable();
			$table->string('LnkIsMobile')->nullable();
			$table->timestamps();
		});
	
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
    	Schema::drop('AB_Link');
	
    }
}
