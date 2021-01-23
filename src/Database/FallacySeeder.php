<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-seeder.blade.php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FallacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {

	DB::table('SL_Databases')->insert([
			'DbID' => 1,
			'DbUser' => '1',
			'DbPrefix' => 'FA_',
			'DbName' => 'Fallacies',
			'DbDesc' => 'Don\'t Fallacy Me, Bro!!',
			'DbMission' => 'Don\'t Fallacy Me is a free, collaborative, multiplayer mind game! It provides an example, and you select the clearest logical fallacy. A fallacy is, very generally, an error in reasoning. This differs from a factual error, which is simply being wrong about the facts.',
			'DbTables' => '12',
			'DbFields' => '66'
		]);
	
	DB::table('SL_Tables')->insert([
			'TblID' => 30,
			'TblDatabase' => '1',
			'TblName' => 'users',
			'TblEng' => 'Users',
			'TblDesc' => 'This represents the Laravel Users table, but will not actually be implemented by Survloop as part of the database installation.',
			'TblGroup' => 'Users',
			'TblOrd' => '10',
			'TblNumForeignIn' => '4'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 45,
			'TblDatabase' => '1',
			'TblAbbr' => 'FalPar',
			'TblName' => 'FallacyParents',
			'TblEng' => 'Fallacy Category Parent',
			'TblDesc' => 'Each record indicates a fallacy category as being grouped within a parent fallacy category.',
			'TblGroup' => 'Fallacy Main Game',
			'TblOrd' => '5',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 46,
			'TblDatabase' => '1',
			'TblAbbr' => 'FalVid',
			'TblName' => 'FallacyVideos',
			'TblEng' => 'Fallacy Videos',
			'TblDesc' => 'Each record is a link to a Video which discusses one type of Fallacy.',
			'TblGroup' => 'Fallacy Main Game',
			'TblOrd' => '4',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 47,
			'TblDatabase' => '1',
			'TblAbbr' => 'Pla',
			'TblName' => 'GamePlays',
			'TblEng' => 'Game Plays',
			'TblDesc' => 'Each record represents one load of a Fallacy Example by one player.',
			'TblGroup' => 'Fallacy Main Game',
			'TblNumFields' => '13',
			'TblNumForeignKeys' => '3',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 50,
			'TblDatabase' => '1',
			'TblAbbr' => 'Res',
			'TblName' => 'GameResponses',
			'TblEng' => 'Game Play Responses',
			'TblDesc' => 'Each record represents a User\'s selection of one type of Fallacy (category) in response to the Statement Example.',
			'TblType' => 'Subset',
			'TblGroup' => 'Fallacy Main Game',
			'TblOrd' => '1',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 52,
			'TblDatabase' => '1',
			'TblAbbr' => 'Ses',
			'TblName' => 'GameSessions',
			'TblEng' => 'Game Sessions',
			'TblDesc' => 'Each record represents one Session of many Plays of the game, whether logged in or not.',
			'TblGroup' => 'Fallacy Main Game',
			'TblOrd' => '2',
			'TblNumFields' => '9',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 53,
			'TblDatabase' => '1',
			'TblAbbr' => 'UsrStat',
			'TblName' => 'UserStats',
			'TblEng' => 'User Statistics',
			'TblDesc' => 'Each row supplements the Users table with additional information and cached statistics.',
			'TblGroup' => 'Users',
			'TblOrd' => '11',
			'TblNumFields' => '11',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 54,
			'TblDatabase' => '1',
			'TblAbbr' => 'FalSim',
			'TblName' => 'FallacySimilar',
			'TblEng' => 'Fallacies Similar',
			'TblDesc' => 'Each record indicates that a type of Fallacy is similar to a second type of Fallacy.',
			'TblGroup' => 'Fallacy Main Game',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 55,
			'TblDatabase' => '1',
			'TblAbbr' => 'Exa',
			'TblName' => 'Examples',
			'TblEng' => 'Fallacy Examples',
			'TblDesc' => 'Each record represents one example statement featuring one or more logical fallacies.',
			'TblGroup' => 'Fallacy Main Game',
			'TblOrd' => '6',
			'TblNumFields' => '14',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 56,
			'TblDatabase' => '1',
			'TblAbbr' => 'ExaAns',
			'TblName' => 'ExampleAnswers',
			'TblEng' => 'Example Answers',
			'TblDesc' => 'Each record links one Fallacy Category as a correct Answer to one Example.',
			'TblType' => 'Linking',
			'TblGroup' => 'Fallacy Main Game',
			'TblOrd' => '7',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 57,
			'TblDatabase' => '1',
			'TblAbbr' => 'Fal',
			'TblName' => 'Fallacies',
			'TblEng' => 'Types of Fallacies',
			'TblDesc' => 'Each record stores all the information about one category of Fallacy.',
			'TblGroup' => 'Fallacy Main Game',
			'TblOrd' => '3',
			'TblNumFields' => '7',
			'TblNumForeignIn' => '7'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 59,
			'TblDatabase' => '1',
			'TblAbbr' => 'ExaImgLnk',
			'TblName' => 'ExampleImgLnks',
			'TblEng' => 'Example Image Links',
			'TblDesc' => 'Each record links one Image with one Fallacy Example as a match to be paired together.',
			'TblGroup' => 'Fallacy Main Game',
			'TblOrd' => '8',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
	
	DB::table('SL_Fields')->insert([
			'FldID' => 512,
			'FldDatabase' => '1',
			'FldTable' => '56',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'FallacyID',
			'FldEng' => 'Fallacy ID',
			'FldDesc' => 'Indicates the unique Fallacy ID number of the specific statement linked with this Example.',
			'FldForeignTable' => '57',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 513,
			'FldDatabase' => '1',
			'FldTable' => '59',
			'FldSpecSource' => '0',
			'FldName' => 'ExampleID',
			'FldEng' => 'Statement Example ID',
			'FldDesc' => 'Indicates the unique Example ID number of the specific statement to be paired with this Example Image.',
			'FldForeignTable' => '55',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 514,
			'FldDatabase' => '1',
			'FldTable' => '59',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'ImageID',
			'FldEng' => 'Example Image ID',
			'FldDesc' => 'Indicates the unique Example Image ID number of the specific statement to be paired with this Example.',
			'FldForeignTable' => '37',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 519,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'ExampleID',
			'FldEng' => 'Statement Example ID',
			'FldDesc' => 'Indicates the unique Statement Example ID number of the Example delivered to the User for this Play of the game.',
			'FldForeignTable' => '55',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 520,
			'FldDatabase' => '1',
			'FldTable' => '50',
			'FldSpecSource' => '0',
			'FldName' => 'PlayID',
			'FldEng' => 'Game Play ID',
			'FldDesc' => 'Indicates the unique Game Play ID number of the Play instigating these Responses.',
			'FldForeignTable' => '47',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 521,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'TotalRight',
			'FldEng' => 'Total Correct Responses',
			'FldDesc' => 'Indicates the total number of correct responses given by the User on this Play.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 522,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'TotalWrong',
			'FldEng' => 'Total Incorrect Responses',
			'FldDesc' => 'Indicates the total number of incorrect responses given by the User on this Play.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 523,
			'FldDatabase' => '1',
			'FldTable' => '50',
			'FldSpecSource' => '0',
			'FldName' => 'FallacyID',
			'FldEng' => 'Fallacy ID',
			'FldDesc' => 'Indicates the unique Fallacy ID number of the specific type of Fallacy being chosen in response.',
			'FldForeignTable' => '57',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 524,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldSpecSource' => '0',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number of the User who owns this session, if one is logged in.',
			'FldForeignTable' => '30',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 525,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Score',
			'FldEng' => 'Session Score',
			'FldDesc' => 'Indicates the total score accumulated from as many Plays as contained in this session.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 526,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'SessionID',
			'FldEng' => 'Game Session ID',
			'FldDesc' => 'Indicates the unique Game Session ID number of the Session where this Play\'s score accumulates.',
			'FldForeignTable' => '52',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 527,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Score',
			'FldEng' => 'Total Play Score',
			'FldDesc' => 'Indicates the total number of scoring points awarded during this Play.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 528,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Difficulty',
			'FldEng' => 'Current Difficulty Setting',
			'FldDesc' => 'Indicates which Game Difficulty Settings is currently selected for this Game Play.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Game Difficulty',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 529,
			'FldDatabase' => '1',
			'FldTable' => '53',
			'FldSpecSource' => '0',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number of the User with extra information and cached statistics here.',
			'FldForeignTable' => '30',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 530,
			'FldDatabase' => '1',
			'FldTable' => '53',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'LastLogin',
			'FldEng' => 'Last Login',
			'FldDesc' => 'Indicates the date and time of this User\'s last login into the website.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6',
			'FldCompareOther' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 531,
			'FldDatabase' => '1',
			'FldTable' => '53',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'TotSessions',
			'FldEng' => 'Total Sessions',
			'FldDesc' => 'Indicates the total number of different Game Play Sessions this user has had since starting their account.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 532,
			'FldDatabase' => '1',
			'FldTable' => '53',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'PersonalBest',
			'FldEng' => 'Personal Best Session Score',
			'FldDesc' => 'Indicates the best Game Play Session this user has had since starting their account.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 533,
			'FldDatabase' => '1',
			'FldTable' => '53',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'TotScoreEasy',
			'FldEng' => 'Cumulative Score on Easy',
			'FldDesc' => 'Indicates the total number of points score on the Easy Difficulty setting since this User started their account.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 534,
			'FldDatabase' => '1',
			'FldTable' => '53',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'TotScoreMedium',
			'FldEng' => 'Cumulative Score on Medium',
			'FldDesc' => 'Indicates the total number of points score on the Medium Difficulty setting since this User started their account.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 535,
			'FldDatabase' => '1',
			'FldTable' => '53',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'TotScoreHard',
			'FldEng' => 'Cumulative Score on Hard',
			'FldDesc' => 'Indicates the total number of points score on the Hard Difficulty setting since this User started their account.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 536,
			'FldDatabase' => '1',
			'FldTable' => '53',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'TotExamples',
			'FldEng' => 'Total Fallacy Examples Posted',
			'FldDesc' => 'Indicates the total number of different Statement Examples this User has added to the Crowd-Sourced Set since starting their account.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 537,
			'FldDatabase' => '1',
			'FldTable' => '53',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'TotImages',
			'FldEng' => 'Total Example Images Uploaded',
			'FldDesc' => 'Indicates the total number of different Example Images this User has added to the game since starting their account.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 538,
			'FldDatabase' => '1',
			'FldTable' => '53',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'TotThreads',
			'FldEng' => 'Total Discussion Sub-Threads Started',
			'FldDesc' => 'Indicates the total number of Discussion Sub-Threads started by this User since starting their account.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 539,
			'FldDatabase' => '1',
			'FldTable' => '53',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'TotalComments',
			'FldEng' => 'Total Discussion Comments Posted',
			'FldDesc' => 'Indicates the total number of Discussion Comments posted by this User since starting their account.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 540,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Difficulty',
			'FldEng' => 'Current Difficulty Setting',
			'FldDesc' => 'Indicates which Game Difficulty Settings is currently selected for this Game Play Session.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Game Difficulty',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 541,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldSpecType' => 'Replica',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Experience Node Progress',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 542,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldSpecType' => 'Replica',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version Number',
			'FldDesc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 543,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldSpecType' => 'Replica',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 544,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldSpecType' => 'Replica',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String For Record',
			'FldDesc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 545,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldSpecType' => 'Replica',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 546,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldSpecType' => 'Replica',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 547,
			'FldDatabase' => '1',
			'FldTable' => '54',
			'FldSpecSource' => '0',
			'FldName' => 'FallacyID1',
			'FldEng' => 'Fallacy #1 ID',
			'FldDesc' => 'Indicates the first unique Fallacy ID number which is similar.',
			'FldForeignTable' => '57',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 548,
			'FldDatabase' => '1',
			'FldTable' => '54',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'FallacyID2',
			'FldEng' => 'Fallacy #2 ID',
			'FldDesc' => 'Indicates the second unique Fallacy ID number which is similar.',
			'FldForeignTable' => '57',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 480,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '7',
			'FldSpecType' => 'Replica',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number of the User owning the data stored in this record for this Experience.',
			'FldForeignTable' => '30',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 481,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '8',
			'FldSpecType' => 'Replica',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Experience Node Progress',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 482,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '12',
			'FldSpecType' => 'Replica',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version Number',
			'FldDesc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 483,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '11',
			'FldSpecType' => 'Replica',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 484,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '9',
			'FldSpecType' => 'Replica',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String For Record',
			'FldDesc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 485,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '10',
			'FldSpecType' => 'Replica',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 486,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '13',
			'FldSpecType' => 'Replica',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 487,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Example Type',
			'FldDesc' => 'Indicates which type of Fallacy Example this row stores, important for filtering between \'official\' and crowd-sourced Examples.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Example Type',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 488,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'SourceUrl',
			'FldEng' => 'Example Source URL',
			'FldDesc' => 'Indicates the URL of source of the statement in this example, if it comes from a real context. Important for providing documentation when it is accessible online.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 489,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'TotRight',
			'FldEng' => 'Total Right Answers',
			'FldDesc' => 'Indicates the total number of correct responses Users provided when presented with this Example.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6',
			'FldCompareOther' => '6',
			'FldOperateSame' => '137200',
			'FldOperateOther' => '137200'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 490,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'TotWrong',
			'FldEng' => 'Total Wrong Answers',
			'FldDesc' => 'Indicates the total number of incorrect responses Users provided when presented with this Example.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6',
			'FldCompareOther' => '6',
			'FldOperateSame' => '137200',
			'FldOperateOther' => '137200'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 491,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'DiscussLast',
			'FldEng' => 'Last Discussion Comment',
			'FldDesc' => 'Indicates the date and time of the last comment added to this Example\'s Discussion. Important for knowing which Discussions have the most recent activity.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 492,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'DiscussTotal',
			'FldEng' => 'Total Discussion Comments',
			'FldDesc' => 'Indicates the total number of Discussion Comments added to this Example\'s Discussion. Important for knowing which Discussions have the most activity overall.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 493,
			'FldDatabase' => '1',
			'FldTable' => '57',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'English',
			'FldEng' => 'Fallacy\'s English Name',
			'FldDesc' => 'Indicates the best English name for the category of logical fallacy in this record.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 494,
			'FldDatabase' => '1',
			'FldTable' => '57',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Latin',
			'FldEng' => 'Fallacy\'s Latin Name',
			'FldDesc' => 'Indicates the formal Latin name of the category of logical fallacy, if it has one.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 495,
			'FldDatabase' => '1',
			'FldTable' => '57',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Aka',
			'FldEng' => 'Fallacy Also Known As',
			'FldDesc' => 'Indicates all the other common names for this category of logical fallacy.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 496,
			'FldDatabase' => '1',
			'FldTable' => '57',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Desc',
			'FldEng' => 'Fallacy Description',
			'FldDesc' => 'Indicates a full written description of this category of logical fallacy.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 497,
			'FldDatabase' => '1',
			'FldTable' => '57',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'TotExamples',
			'FldEng' => 'Total Examples',
			'FldDesc' => 'Indicates the total number of Statement Examples which use this category of logical Fallacy as a correct Answer.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 498,
			'FldDatabase' => '1',
			'FldTable' => '57',
			'FldSpecSource' => '0',
			'FldName' => 'CategoryType',
			'FldEng' => 'Type of Category',
			'FldDesc' => 'Indicates which type of fallacy category this record describes.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Types of Fallacy Categories',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 499,
			'FldDatabase' => '1',
			'FldTable' => '57',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'CategoryDesc',
			'FldEng' => 'Categories Description',
			'FldDesc' => 'Indicates a full written description of the categories to which this logical fallacy belongs.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 500,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldSpecSource' => '0',
			'FldName' => 'ParentID',
			'FldEng' => 'Parent Fallacy ID',
			'FldDesc' => 'Indicates the unique Fallacy ID number of the specific parent Fallacy category of which one is a subset.',
			'FldForeignTable' => '57',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 501,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'ChildID',
			'FldEng' => 'Child Fallacy ID',
			'FldDesc' => 'Indicates the unique Fallacy ID number of the specific child Fallacy category which is a subset of the parent.',
			'FldForeignTable' => '57',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 502,
			'FldDatabase' => '1',
			'FldTable' => '46',
			'FldSpecSource' => '0',
			'FldName' => 'FallacyID',
			'FldEng' => 'Fallacy ID',
			'FldDesc' => 'Indicates the unique Fallacy ID number of the specific Fallacy related to this Video.',
			'FldForeignTable' => '57',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 503,
			'FldDatabase' => '1',
			'FldTable' => '46',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Url',
			'FldEng' => 'Video URL',
			'FldDesc' => 'Indicates the URL of the video discussing the Fallacy linked in this record.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 504,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldSpecType' => 'Replica',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number of the User owning the data stored in this record for this Experience.',
			'FldForeignTable' => '30',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 505,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '12',
			'FldSpecType' => 'Replica',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Experience Node Progress',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 506,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '9',
			'FldSpecType' => 'Replica',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version Number',
			'FldDesc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 507,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '10',
			'FldSpecType' => 'Replica',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 508,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '11',
			'FldSpecType' => 'Replica',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String For Record',
			'FldDesc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 509,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '7',
			'FldSpecType' => 'Replica',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 510,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '8',
			'FldSpecType' => 'Replica',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 511,
			'FldDatabase' => '1',
			'FldTable' => '56',
			'FldSpecSource' => '0',
			'FldName' => 'ExampleID',
			'FldEng' => 'Statement Example ID',
			'FldDesc' => 'Indicates the unique Example ID number of the specific statement linked with this logical Fallacy.',
			'FldForeignTable' => '55',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10308,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Statement',
			'FldEng' => 'Example Statement or Argument',
			'FldDesc' => 'Indicates the actual statement or argument which exemplifies one or more logical fallacy.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
	
	DB::table('SL_Definitions')->insert([
			'DefID' => 1,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-url',
			'DefDescription' => 'http://fallacy.local'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 2,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'font-main',
			'DefDescription' => 'Helvetica,Arial,sans-serif'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 3,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-bg',
			'DefDescription' => '#FFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 4,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-text',
			'DefDescription' => '#333'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 5,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-link',
			'DefDescription' => '#2A32D5'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 6,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-grey',
			'DefDescription' => '#999'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 7,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-faint',
			'DefDescription' => '#F9F6FF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 8,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-faintr',
			'DefDescription' => '#FEFDFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 9,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-on',
			'DefDescription' => '#622AD5'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 10,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-off',
			'DefDescription' => '#8351E8'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 11,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-info-on',
			'DefDescription' => '#5BC0DE'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 12,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-info-off',
			'DefDescription' => '#2AABD2'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 13,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-danger-on',
			'DefDescription' => '#D52A2C'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 14,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-danger-off',
			'DefDescription' => '#EF888A'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 15,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-success-on',
			'DefDescription' => '#006D36'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 16,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-success-off',
			'DefDescription' => '#29B76F'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 17,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-warn-on',
			'DefDescription' => '#F0AD4E'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 18,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-warn-off',
			'DefDescription' => '#EB9316'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 19,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-line-hr',
			'DefDescription' => '#622AD5'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 20,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-field-bg',
			'DefDescription' => '#FFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 21,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-form-text',
			'DefDescription' => '#333'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 22,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-logo',
			'DefDescription' => '#D52A2C'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 23,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-nav-bg',
			'DefDescription' => '#F8F5FF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 24,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-nav-text',
			'DefDescription' => '#622AD5'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 25,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'site-name',
			'DefDescription' => 'Don\'t Fallacy Me Bro'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 26,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'cust-abbr',
			'DefDescription' => 'Fallacy'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 27,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'cust-package',
			'DefDescription' => 'rockhopsoft/fallacy'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 28,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-url',
			'DefDescription' => 'http://fallacy.local'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 29,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-title',
			'DefDescription' => 'Don\'t Fallacy Me, Bro! A logical fallacy brain game'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 30,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-desc',
			'DefDescription' => 'Don\'t Fallacy Me is a free, collaborative, multiplayer mind game! It provides an example, and you select the clearest logical fallacy. A fallacy is, very generally, an error in reasoning. This differs from a factual error, which is simply being wrong about the facts.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 31,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-keywords',
			'DefDescription' => 'logical fallacy, critical thinking, games, online gaming, brain,'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 32,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-img',
			'DefDescription' => '/fallacy/uploads/meta-image2.jpg'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 33,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-lrg',
			'DefDescription' => '/fallacy/uploads/logo-dont-fallacy-me-sm.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 34,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-md',
			'DefDescription' => '/fallacy/uploads/logo-dont-fallacy-me-sm.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 35,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-sm',
			'DefDescription' => '/fallacy/uploads/logo-dont-fallacy-me-sm.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 36,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'shortcut-icon',
			'DefDescription' => '/fallacy/uploads/favicon3.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 37,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'spinner-code',
			'DefDescription' => '<i class="fa-li fa fa-spinner fa-spin"></i>'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 43,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'twitter',
			'DefDescription' => '@WikiWorldOrder'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 44,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'show-logo-title',
			'DefDescription' => '0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 45,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'users-create-db',
			'DefDescription' => '0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 46,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-partners',
			'DefDescription' => '0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 47,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-volunteers',
			'DefDescription' => '0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 48,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-canada',
			'DefDescription' => '1'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 49,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'parent-company',
			'DefDescription' => 'Wiki World Order'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 50,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'parent-website',
			'DefDescription' => 'http://WikiWorldOrder.org'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 51,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'login-instruct',
			'DefDescription' => 'HTML'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 52,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'signup-instruct',
			'DefDescription' => 'HTML'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 53,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license',
			'DefDescription' => 'Creative Commons Attribution-ShareAlike License'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 54,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license-url',
			'DefDescription' => 'http://creativecommons.org/licenses/by-sa/3.0/'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 55,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license-img',
			'DefDescription' => '/survloop/uploads/creative-commons-by-sa-88x31.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 56,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'css-extra-files'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 57,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'header-code',
			'DefDescription' => '<!-- -->'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 58,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'administrator',
			'DefValue' => 'Administrator',
			'DefDescription' => 'Highest system administrative privileges, can add, remove, and change permissions of other users'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 59,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'databaser',
			'DefOrder' => '1',
			'DefValue' => 'Database Designer',
			'DefDescription' => 'Permissions to make edits in the database designing tools'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 60,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'staff',
			'DefOrder' => '2',
			'DefValue' => 'Staff/Analyst',
			'DefDescription' => 'Full staff priveleges, can view but not edit technical specs'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 61,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'partner',
			'DefOrder' => '3',
			'DefValue' => 'Partner Member',
			'DefDescription' => 'Basic permission to pages and tools just for partners'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 62,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'volunteer',
			'DefOrder' => '4',
			'DefValue' => 'Volunteer',
			'DefDescription' => 'Basic permission to pages and tools just for volunteers'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 63,
			'DefDatabase' => '1',
			'DefSet' => 'Style CSS',
			'DefSubset' => 'main',
			'DefDescription' => '#mainNav { border-bottom: 1px #622AD5 solid; }
#navBurger { border: 1px #622AD5 solid; }'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 64,
			'DefDatabase' => '1',
			'DefSet' => 'Style CSS',
			'DefSubset' => 'email'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 65,
			'DefDatabase' => '1',
			'DefSubset' => 'Example Type',
			'DefValue' => 'Official Set'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 66,
			'DefDatabase' => '1',
			'DefSubset' => 'Example Type',
			'DefOrder' => '1',
			'DefValue' => 'Crowd-Sourced Set'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 67,
			'DefDatabase' => '1',
			'DefSubset' => 'Example Status',
			'DefValue' => 'Active'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 68,
			'DefDatabase' => '1',
			'DefSubset' => 'Example Status',
			'DefOrder' => '1',
			'DefValue' => 'Disabled'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 69,
			'DefDatabase' => '1',
			'DefSubset' => 'Types of Fallacy Categories',
			'DefValue' => 'Specific Latin-Named'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 70,
			'DefDatabase' => '1',
			'DefSubset' => 'Types of Fallacy Categories',
			'DefOrder' => '1',
			'DefValue' => 'Specific'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 71,
			'DefDatabase' => '1',
			'DefSubset' => 'Types of Fallacy Categories',
			'DefOrder' => '2',
			'DefValue' => 'Contains Sub-Categories'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 72,
			'DefDatabase' => '1',
			'DefSubset' => 'Game Difficulty',
			'DefValue' => 'Tutorial'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 73,
			'DefDatabase' => '1',
			'DefSubset' => 'Game Difficulty',
			'DefOrder' => '1',
			'DefValue' => 'Crowd-Sourced Set with 1 Fallacy Marked Correct'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 74,
			'DefDatabase' => '1',
			'DefSubset' => 'Game Difficulty',
			'DefOrder' => '2',
			'DefValue' => 'Crowd-Sourced Set with More Than 1 Fallacy Marked Correct'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 78,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'user-name-req',
			'DefDescription' => '1 or 0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 79,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-avatars',
			'DefDescription' => '/fallacy/uploads/brain-toroid-anim-sm.gif'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 80,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license-snc',
			'DefDescription' => '2019'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 81,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'sys-cust-js',
			'DefDescription' => 'var custom = 1;'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 82,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'sys-cust-ajax',
			'DefDescription' => 'function reqFormFldCustom() { return 0; }'
		]);
	

	DB::table('SL_Tree')->insert([
			'TreeID' => 1,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey',
			'TreeName' => 'Don\'t Fallacy Me Game Play',
			'TreeDesc' => 'This is the whole game!',
			'TreeSlug' => 'game',
			'TreeRoot' => '48',
			'TreeFirstPage' => '49',
			'TreeLastPage' => '49',
			'TreeCoreTable' => '47'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 2,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Don\'t Fallacy Me Game Play',
			'TreeSlug' => 'game',
			'TreeRoot' => '52',
			'TreeCoreTable' => '40'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 5,
			'TreeDatabase' => '1',
			'TreeUser' => '0',
			'TreeType' => 'Page',
			'TreeName' => 'Home',
			'TreeSlug' => 'home',
			'TreeRoot' => '15',
			'TreeOpts' => '7'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 6,
			'TreeDatabase' => '1',
			'TreeUser' => '0',
			'TreeType' => 'Page',
			'TreeName' => 'Dashboard',
			'TreeSlug' => 'dashboard',
			'TreeRoot' => '17',
			'TreeOpts' => '21'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 7,
			'TreeDatabase' => '1',
			'TreeUser' => '0',
			'TreeType' => 'Page',
			'TreeName' => 'Volunteer',
			'TreeSlug' => 'volunteer',
			'TreeRoot' => '19',
			'TreeOpts' => '119'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 8,
			'TreeDatabase' => '1',
			'TreeUser' => '0',
			'TreeType' => 'Page',
			'TreeName' => 'Partner',
			'TreeSlug' => 'partner',
			'TreeRoot' => '21',
			'TreeOpts' => '287'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 9,
			'TreeDatabase' => '1',
			'TreeUser' => '0',
			'TreeType' => 'Page',
			'TreeName' => 'Staff',
			'TreeSlug' => 'staff',
			'TreeRoot' => '23',
			'TreeOpts' => '301'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 10,
			'TreeDatabase' => '1',
			'TreeUser' => '0',
			'TreeType' => 'Page',
			'TreeName' => 'Search',
			'TreeSlug' => 'search',
			'TreeRoot' => '25',
			'TreeOpts' => '31'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 11,
			'TreeDatabase' => '1',
			'TreeUser' => '0',
			'TreeType' => 'Page',
			'TreeName' => 'Dashboard Search',
			'TreeSlug' => 'search',
			'TreeRoot' => '27',
			'TreeOpts' => '93'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 12,
			'TreeDatabase' => '1',
			'TreeUser' => '0',
			'TreeType' => 'Page',
			'TreeName' => 'Volunteer Search',
			'TreeSlug' => 'volun-search',
			'TreeRoot' => '29',
			'TreeOpts' => '527'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 13,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'My Profile',
			'TreeSlug' => 'my-profile',
			'TreeRoot' => '31',
			'TreeOpts' => '23'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 17,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey',
			'TreeName' => 'Don\'t Fallacy Me Game Session',
			'TreeSlug' => 'game-session',
			'TreeRoot' => '53',
			'TreeCoreTable' => '52'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 18,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Don\'t Fallacy Me Game Session',
			'TreeSlug' => 'game-session'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 19,
			'TreeDatabase' => '1',
			'TreeUser' => '0',
			'TreeType' => 'Page',
			'TreeName' => 'Staff Search',
			'TreeSlug' => 'staff-search',
			'TreeRoot' => '55',
			'TreeOpts' => '1333'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 20,
			'TreeDatabase' => '1',
			'TreeUser' => '0',
			'TreeType' => 'Page',
			'TreeName' => 'Partner Search',
			'TreeSlug' => 'partner-search',
			'TreeRoot' => '57',
			'TreeOpts' => '1271'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 21,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey',
			'TreeName' => 'Add Fallacy Example',
			'TreeSlug' => 'add-fallacy-example',
			'TreeRoot' => '59',
			'TreeFirstPage' => '60',
			'TreeLastPage' => '61',
			'TreeCoreTable' => '55',
			'TreeOpts' => '22'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 22,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Add Fallacy Example',
			'TreeSlug' => 'add-fallacy-example'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 23,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Fallacy Example #[[coreID]]',
			'TreeSlug' => 'fallacy-example',
			'TreeRoot' => '65',
			'TreeFirstPage' => '65',
			'TreeLastPage' => '65',
			'TreeOpts' => '13'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 24,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'List of Different Fallacies',
			'TreeSlug' => 'list-of-different-fallacies',
			'TreeRoot' => '71',
			'TreeFirstPage' => '71',
			'TreeLastPage' => '71'
		]);
	
	DB::table('SL_Node')->insert([
			'NodeID' => 15,
			'NodeTree' => '5',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'home'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 16,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 17,
			'NodeTree' => '6',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'dashboard'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 18,
			'NodeTree' => '6',
			'NodeParentID' => '17',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 19,
			'NodeTree' => '7',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'volunteer'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 20,
			'NodeTree' => '7',
			'NodeParentID' => '19',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 21,
			'NodeTree' => '8',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'partner'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 22,
			'NodeTree' => '8',
			'NodeParentID' => '21',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 23,
			'NodeTree' => '9',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'staff'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 24,
			'NodeTree' => '9',
			'NodeParentID' => '23',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 25,
			'NodeTree' => '10',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 26,
			'NodeTree' => '10',
			'NodeParentID' => '25',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 27,
			'NodeTree' => '11',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 28,
			'NodeTree' => '11',
			'NodeParentID' => '27',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 29,
			'NodeTree' => '12',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'volun-search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 30,
			'NodeTree' => '12',
			'NodeParentID' => '29',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 31,
			'NodeTree' => '13',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'my-profile'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 32,
			'NodeTree' => '13',
			'NodeParentID' => '31',
			'NodeType' => 'Member Profile Basics'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 33,
			'NodeTree' => '13',
			'NodeParentID' => '31',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Row'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 34,
			'NodeTree' => '13',
			'NodeParentID' => '33',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '7'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 35,
			'NodeTree' => '13',
			'NodeParentID' => '33',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 36,
			'NodeTree' => '13',
			'NodeParentID' => '33',
			'NodeParentOrder' => '2',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 37,
			'NodeTree' => '13',
			'NodeParentID' => '34',
			'NodeType' => 'Search Results',
			'NodePromptText' => '<h2>Your Participation</h2>',
			'NodeResponseSet' => '1',
			'NodeDataBranch' => 'users'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 38,
			'NodeTree' => '13',
			'NodeParentID' => '36',
			'NodeType' => 'Incomplete Sess Check',
			'NodeResponseSet' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 39,
			'NodeTree' => '1',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Don\'t Fallacy Me Game'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 40,
			'NodeTree' => '1',
			'NodeParentID' => '39',
			'NodeType' => 'Page',
			'NodePromptText' => 'Welcome To Don\'t Fallacy Me Game',
			'NodePromptNotes' => 'welcome'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 41,
			'NodeTree' => '1',
			'NodeParentID' => '40',
			'NodeType' => 'Text',
			'NodePromptText' => '<h2 class="slBlueDark">Welcome</h2>This is a sample question to a user. What will you ask them first?'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 44,
			'NodeTree' => '1',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Don\'t Fallacy Me Game'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 45,
			'NodeTree' => '1',
			'NodeParentID' => '44',
			'NodeType' => 'Page',
			'NodePromptText' => 'Welcome To Don\'t Fallacy Me Game',
			'NodePromptNotes' => 'welcome'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 46,
			'NodeTree' => '1',
			'NodeParentID' => '45',
			'NodeType' => 'Text',
			'NodePromptText' => '<h2 class="slBlueDark">Welcome</h2>This is a sample question to a user. What will you ask them first?'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 48,
			'NodeTree' => '1',
			'NodeType' => 'Data Manip: Update',
			'NodePromptText' => 'Don\'t Fallacy Me Game',
			'NodeDataBranch' => 'GamePlays'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 49,
			'NodeTree' => '1',
			'NodeParentID' => '48',
			'NodeType' => 'Page',
			'NodePromptText' => 'Welcome To Don\'t Fallacy Me Game',
			'NodePromptNotes' => 'play',
			'NodePromptAfter' => 'Play The Game!::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 50,
			'NodeTree' => '1',
			'NodeParentID' => '49',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Select the one clearest logical fallacy in this example:',
			'NodeDataStore' => 'GameResponses:ResID',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 52,
			'NodeTree' => '2',
			'NodeType' => 'XML',
			'NodePromptText' => 'FallacyExamples',
			'NodePromptNotes' => '40'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 53,
			'NodeTree' => '17',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'GameSessions'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 54,
			'NodeTree' => '17',
			'NodeParentID' => '53',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'manage-session',
			'NodePromptAfter' => 'Manage Game Session::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 55,
			'NodeTree' => '19',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'staff-search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 56,
			'NodeTree' => '19',
			'NodeParentID' => '55',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 57,
			'NodeTree' => '20',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'partner-search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 58,
			'NodeTree' => '20',
			'NodeParentID' => '57',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 59,
			'NodeTree' => '21',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'Examples'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 60,
			'NodeTree' => '21',
			'NodeParentID' => '59',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'edit-fallacy-example',
			'NodePromptAfter' => 'Edit Fallacy Example::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 61,
			'NodeTree' => '21',
			'NodeParentID' => '59',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'redirect',
			'NodePromptAfter' => 'Redirect::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 62,
			'NodeTree' => '21',
			'NodeParentID' => '60',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3>To edit fallacy examples on the site, you must be logged in. Please <a href="/login">login</a> or <a href="/register">sign up</a>.</h3>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 63,
			'NodeTree' => '21',
			'NodeParentID' => '60',
			'NodeType' => 'Page Block'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 64,
			'NodeTree' => '21',
			'NodeParentID' => '63',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<h2 class="slBlueDark">Add An Example To The Crowd-Sourced Collection</h2>
<p><a href="#">Click here to see your sub-set of fallacious statements.</a></p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 65,
			'NodeTree' => '23',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'fallacy-example',
			'NodePromptAfter' => 'Fallacy Example #[[coreID]]::M::::M::::M::',
			'NodeResponseSet' => '21',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 66,
			'NodeTree' => '23',
			'NodeParentID' => '65',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Welcome to Fallacy Example #[[coreID]].</h2>
<p>Edit this node to fill in your page! This node could be your entire page, or just one little component.</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 67,
			'NodeTree' => '21',
			'NodeParentID' => '63',
			'NodeParentOrder' => '1',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'Add an example of a fallacious statement or argument:',
			'NodeDataStore' => 'Examples:ExaStatement',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 68,
			'NodeTree' => '21',
			'NodeParentID' => '63',
			'NodeParentOrder' => '3',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which logical fallacy, or few main fallacies is this an example of?',
			'NodeResponseSet' => 'Table::Fallacies',
			'NodeDataStore' => 'ExampleAnswers:ExaAnsFallacyID',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 69,
			'NodeTree' => '21',
			'NodeParentID' => '63',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'If the statement is a real-life example, please provide the source URL here:',
			'NodeDataStore' => 'Examples:ExaSourceUrl'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 70,
			'NodeTree' => '21',
			'NodeParentID' => '61',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => 'Redirecting...'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 71,
			'NodeTree' => '24',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'list-of-different-fallacies',
			'NodePromptAfter' => 'List of Different Fallacies::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 72,
			'NodeTree' => '24',
			'NodeParentID' => '71',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Welcome to List of Different Fallacies.</h2>
<p>Edit this node to fill in your page! This node could be your entire page, or just one little component.</p>'
		]);
	

	DB::table('SL_Conditions')->insert([
			'CondID' => 18,
			'CondDatabase' => '1',
			'CondTag' => '#OnEasy',
			'CondDesc' => 'Game play difficulty set to easy.',
			'CondOperDeet' => '0',
			'CondField' => '340',
			'CondTable' => '52',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 19,
			'CondDatabase' => '1',
			'CondTag' => '#OnMedium',
			'CondDesc' => 'Game play difficulty set to medium.',
			'CondOperDeet' => '0',
			'CondField' => '340',
			'CondTable' => '52',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 20,
			'CondDatabase' => '1',
			'CondTag' => '#OnHard',
			'CondDesc' => 'Game play difficulty set to hard.',
			'CondOperDeet' => '0',
			'CondField' => '340',
			'CondTable' => '52',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
	
	DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 1,
			'CondValCondID' => '18',
			'CondValValue' => '72'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 2,
			'CondValCondID' => '19',
			'CondValValue' => '73'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 3,
			'CondValCondID' => '20',
			'CondValValue' => '74'
		]);
	



	DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 4,
			'DataSubTree' => '17',
			'DataSubTbl' => 'GameSessions',
			'DataSubTblLnk' => 'SesUserID',
			'DataSubSubTbl' => 'users'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 5,
			'DataSubTree' => '17',
			'DataSubTbl' => 'users',
			'DataSubSubTbl' => 'UserStats',
			'DataSubSubLnk' => 'UsrStatUserID',
			'DataSubAutoGen' => '1'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 6,
			'DataSubTree' => '1',
			'DataSubTbl' => 'GamePlays',
			'DataSubTblLnk' => 'PlaExampleID',
			'DataSubSubTbl' => 'Examples'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 7,
			'DataSubTree' => '17',
			'DataSubTbl' => 'GamePlays',
			'DataSubTblLnk' => 'PlaExampleID',
			'DataSubSubTbl' => 'Examples'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 8,
			'DataSubTree' => '21',
			'DataSubTbl' => 'ExampleAnswers',
			'DataSubTblLnk' => 'ExaAnsFallacyID',
			'DataSubSubTbl' => 'Fallacies'
		]);
	
	DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 1,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'GamePlays',
			'DataHelpTable' => 'GameResponses',
			'DataHelpKeyField' => 'ResPlayID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 2,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Examples',
			'DataHelpTable' => 'ExampleImgLnks',
			'DataHelpKeyField' => 'ExaImgLnkExampleID',
			'DataHelpValueField' => 'ExaImgLnkImageID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 3,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Examples',
			'DataHelpTable' => 'ExampleAnswers',
			'DataHelpKeyField' => 'ExaAnsExampleID',
			'DataHelpValueField' => 'ExaAnsFallacyID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 5,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Fallacies',
			'DataHelpTable' => 'FallacyVideos',
			'DataHelpKeyField' => 'FalVidFallacyID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 6,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Fallacies',
			'DataHelpTable' => 'FallacyParents',
			'DataHelpKeyField' => 'FalParChildID',
			'DataHelpValueField' => 'FalParParentID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 7,
			'DataHelpTree' => '17',
			'DataHelpParentTable' => 'GameSessions',
			'DataHelpTable' => 'GamePlays',
			'DataHelpKeyField' => 'PlaSessionID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 8,
			'DataHelpTree' => '17',
			'DataHelpParentTable' => 'Examples',
			'DataHelpTable' => 'ExampleAnswers',
			'DataHelpKeyField' => 'ExaAnsExampleID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 9,
			'DataHelpTree' => '21',
			'DataHelpParentTable' => 'Examples',
			'DataHelpTable' => 'ExampleAnswers',
			'DataHelpKeyField' => 'ExaAnsExampleID',
			'DataHelpValueField' => 'ExaAnsFallacyID'
		]);
	

 } } 