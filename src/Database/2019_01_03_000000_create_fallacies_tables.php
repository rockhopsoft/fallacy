<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-migration.blade.php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FACreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
    	Schema::create('FA_GamePlays', function(Blueprint $table)
		{
			$table->increments('PlaID');
			$table->integer('PlaUserID')->unsigned()->nullable();
			$table->integer('PlaSessionID')->unsigned()->nullable();
			$table->integer('PlaExampleID')->unsigned()->nullable();
			$table->integer('PlaTotalRight')->nullable();
			$table->integer('PlaTotalWrong')->nullable();
			$table->integer('PlaScore')->nullable();
			$table->integer('PlaDifficulty')->unsigned()->nullable();
			$table->string('PlaIPaddy')->nullable();
			$table->string('PlaIsMobile')->nullable();
			$table->string('PlaTreeVersion')->nullable();
			$table->string('PlaVersionAB')->nullable();
			$table->string('PlaUniqueStr')->nullable();
			$table->integer('PlaSubmissionProgress')->nullable();
			$table->timestamps();
		});
		Schema::create('FA_GameResponses', function(Blueprint $table)
		{
			$table->increments('ResID');
			$table->integer('ResFallacyID')->unsigned()->nullable();
			$table->integer('ResPlayID')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('FA_GameSessions', function(Blueprint $table)
		{
			$table->increments('SesID');
			$table->string('SesVersionAB')->nullable();
			$table->integer('SesSubmissionProgress')->nullable();
			$table->string('SesIPaddy')->nullable();
			$table->string('SesTreeVersion')->nullable();
			$table->string('SesUniqueStr')->nullable();
			$table->integer('SesUserID')->unsigned()->nullable();
			$table->string('SesIsMobile')->nullable();
			$table->integer('SesScore')->nullable();
			$table->integer('SesDifficulty')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('FA_Fallacies', function(Blueprint $table)
		{
			$table->increments('FalID');
			$table->integer('FalCategoryType')->unsigned()->nullable();
			$table->string('FalEnglish')->nullable();
			$table->string('FalLatin')->nullable();
			$table->longText('FalAka')->nullable();
			$table->string('FalDesc')->nullable();
			$table->string('FalCategoryDesc')->nullable();
			$table->integer('FalTotExamples')->nullable();
			$table->timestamps();
		});
		Schema::create('FA_FallacyVideos', function(Blueprint $table)
		{
			$table->increments('FalVidID');
			$table->integer('FalVidFallacyID')->unsigned()->nullable();
			$table->string('FalVidUrl')->nullable();
			$table->timestamps();
		});
		Schema::create('FA_FallacyParents', function(Blueprint $table)
		{
			$table->increments('FalParID');
			$table->integer('FalParParentID')->unsigned()->nullable();
			$table->integer('FalParChildID')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('FA_FallacySimilar', function(Blueprint $table)
		{
			$table->increments('FalSimID');
			$table->integer('FalSimFallacyID1')->unsigned()->nullable();
			$table->integer('FalSimFallacyID2')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('FA_Examples', function(Blueprint $table)
		{
			$table->increments('ExaID');
			$table->integer('ExaType')->unsigned()->nullable();
			$table->longText('ExaStatement')->nullable();
			$table->string('ExaSourceUrl')->nullable();
			$table->integer('ExaTotRight')->nullable();
			$table->integer('ExaTotWrong')->nullable();
			$table->dateTime('ExaDiscussLast')->nullable();
			$table->integer('ExaDiscussTotal')->nullable();
			$table->integer('ExaUserID')->unsigned()->nullable();
			$table->integer('ExaSubmissionProgress')->nullable();
			$table->string('ExaUniqueStr')->nullable();
			$table->string('ExaIPaddy')->nullable();
			$table->string('ExaVersionAB')->nullable();
			$table->string('ExaTreeVersion')->nullable();
			$table->string('ExaIsMobile')->nullable();
			$table->timestamps();
		});
		Schema::create('FA_ExampleAnswers', function(Blueprint $table)
		{
			$table->increments('ExaAnsID');
			$table->integer('ExaAnsExampleID')->unsigned()->nullable();
			$table->integer('ExaAnsFallacyID')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('FA_ExampleImgLnks', function(Blueprint $table)
		{
			$table->increments('ExaImgLnkID');
			$table->integer('ExaImgLnkExampleID')->unsigned()->nullable();
			$table->integer('ExaImgLnkImageID')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::create('FA_ExampleImages', function(Blueprint $table)
		{
			$table->increments('ExaImgID');
			$table->integer('ExaImgUserID')->unsigned()->nullable();
			$table->integer('ExaImgStatus')->unsigned()->nullable();
			$table->string('ExaImgFilename')->nullable();
			$table->string('ExaImgName')->nullable();
			$table->string('ExaImgCopyright')->nullable();
			$table->string('ExaImgVersionAB')->nullable();
			$table->integer('ExaImgSubmissionProgress')->nullable();
			$table->string('ExaImgIPaddy')->nullable();
			$table->string('ExaImgTreeVersion')->nullable();
			$table->string('ExaImgUniqueStr')->nullable();
			$table->string('ExaImgIsMobile')->nullable();
			$table->timestamps();
		});
		Schema::create('FA_UserStats', function(Blueprint $table)
		{
			$table->increments('UsrStatID');
			$table->integer('UsrStatUserID')->unsigned()->nullable();
			$table->dateTime('UsrStatLastLogin')->nullable();
			$table->integer('UsrStatTotSessions')->nullable();
			$table->integer('UsrStatPersonalBest')->nullable();
			$table->integer('UsrStatTotScoreEasy')->nullable();
			$table->integer('UsrStatTotScoreMedium')->nullable();
			$table->integer('UsrStatTotScoreHard')->nullable();
			$table->integer('UsrStatTotExamples')->nullable();
			$table->integer('UsrStatTotImages')->nullable();
			$table->integer('UsrStatTotThreads')->nullable();
			$table->integer('UsrStatTotalComments')->nullable();
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
    	Schema::drop('FA_GamePlays');
		Schema::drop('FA_GameResponses');
		Schema::drop('FA_GameSessions');
		Schema::drop('FA_Fallacies');
		Schema::drop('FA_FallacyVideos');
		Schema::drop('FA_FallacyParents');
		Schema::drop('FA_FallacySimilar');
		Schema::drop('FA_Examples');
		Schema::drop('FA_ExampleAnswers');
		Schema::drop('FA_ExampleImgLnks');
		Schema::drop('FA_ExampleImages');
		Schema::drop('FA_UserStats');
	
    }
}
