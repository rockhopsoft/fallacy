<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-seeder.blade.php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FASeeder extends Seeder
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
			'DbTables' => '13',
			'DbFields' => '68'
		]);
	
	DB::table('SL_Tables')->insert([
			'TblID' => 30,
			'TblDatabase' => '1',
			'TblName' => 'users',
			'TblEng' => 'Users',
			'TblDesc' => 'This represents the Laravel Users table, but will not actually be implemented by SurvLoop as part of the database installation.',
			'TblGroup' => 'Users',
			'TblOrd' => '10',
			'TblNumForeignIn' => '4'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 40,
			'TblDatabase' => '1',
			'TblAbbr' => 'Exa',
			'TblName' => 'Examples',
			'TblEng' => 'Fallacy Examples',
			'TblDesc' => 'Each record represents one example statement featuring one or more logical fallacies.',
			'TblGroup' => 'Fallacy Main Game',
			'TblOrd' => '6',
			'TblNumFields' => '13',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 41,
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
			'TblID' => 42,
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
			'TblID' => 43,
			'TblDatabase' => '1',
			'TblAbbr' => 'ExaImg',
			'TblName' => 'ExampleImages',
			'TblEng' => 'Example Images',
			'TblDesc' => 'Each record stores information about one image which can be pair with an Fallacy Example.',
			'TblGroup' => 'Fallacy Main Game',
			'TblOrd' => '9',
			'TblNumFields' => '3',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 44,
			'TblDatabase' => '1',
			'TblAbbr' => 'ExaImgLnk',
			'TblName' => 'ExampleImgLnks',
			'TblEng' => 'Example Image Links',
			'TblDesc' => 'Each record links one Image with one Fallacy Example as a match to be paired together.',
			'TblGroup' => 'Fallacy Main Game',
			'TblOrd' => '8',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
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
	
	DB::table('SL_Fields')->insert([
			'FldID' => 280,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '6',
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
			'FldID' => 281,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '7',
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
			'FldID' => 282,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '11',
			'FldSpecType' => 'Replica',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version Number',
			'FldDesc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 283,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '10',
			'FldSpecType' => 'Replica',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 284,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '8',
			'FldSpecType' => 'Replica',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String For Record',
			'FldDesc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 285,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '9',
			'FldSpecType' => 'Replica',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 286,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '12',
			'FldSpecType' => 'Replica',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 287,
			'FldDatabase' => '1',
			'FldTable' => '40',
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
			'FldID' => 288,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'SourceUrl',
			'FldEng' => 'Example Source URL',
			'FldDesc' => 'Indicates the URL of source of the statement in this example, if it comes from a real context. Important for providing documentation when it is accessible online.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 289,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '2',
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
			'FldID' => 290,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '3',
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
			'FldID' => 291,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '4',
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
			'FldID' => 292,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '5',
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
			'FldID' => 293,
			'FldDatabase' => '1',
			'FldTable' => '42',
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
			'FldID' => 294,
			'FldDatabase' => '1',
			'FldTable' => '42',
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
			'FldID' => 295,
			'FldDatabase' => '1',
			'FldTable' => '42',
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
			'FldID' => 296,
			'FldDatabase' => '1',
			'FldTable' => '42',
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
			'FldID' => 297,
			'FldDatabase' => '1',
			'FldTable' => '42',
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
			'FldID' => 298,
			'FldDatabase' => '1',
			'FldTable' => '42',
			'FldSpecSource' => '0',
			'FldName' => 'CategoryType',
			'FldEng' => 'Type of Category',
			'FldDesc' => 'Indicates which type of fallacy category this record describes.',
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
			'FldID' => 299,
			'FldDatabase' => '1',
			'FldTable' => '42',
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
			'FldID' => 300,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldSpecSource' => '0',
			'FldName' => 'ParentID',
			'FldEng' => 'Parent Fallacy ID',
			'FldDesc' => 'Indicates the unique Fallacy ID number of the specific parent Fallacy category of which one is a subset.',
			'FldForeignTable' => '42',
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
			'FldID' => 301,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'ChildID',
			'FldEng' => 'Child Fallacy ID',
			'FldDesc' => 'Indicates the unique Fallacy ID number of the specific child Fallacy category which is a subset of the parent.',
			'FldForeignTable' => '42',
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
			'FldID' => 302,
			'FldDatabase' => '1',
			'FldTable' => '46',
			'FldSpecSource' => '0',
			'FldName' => 'FallacyID',
			'FldEng' => 'Fallacy ID',
			'FldDesc' => 'Indicates the unique Fallacy ID number of the specific Fallacy related to this Video.',
			'FldForeignTable' => '42',
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
			'FldID' => 303,
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
			'FldID' => 304,
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
			'FldID' => 305,
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
			'FldID' => 306,
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
			'FldID' => 307,
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
			'FldID' => 308,
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
			'FldID' => 309,
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
			'FldID' => 310,
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
			'FldID' => 311,
			'FldDatabase' => '1',
			'FldTable' => '41',
			'FldSpecSource' => '0',
			'FldName' => 'ExampleID',
			'FldEng' => 'Statement Example ID',
			'FldDesc' => 'Indicates the unique Example ID number of the specific statement linked with this logical Fallacy.',
			'FldForeignTable' => '40',
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
			'FldID' => 312,
			'FldDatabase' => '1',
			'FldTable' => '41',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'FallacyID',
			'FldEng' => 'Fallacy ID',
			'FldDesc' => 'Indicates the unique Fallacy ID number of the specific statement linked with this Example.',
			'FldForeignTable' => '42',
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
			'FldID' => 313,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldSpecSource' => '0',
			'FldName' => 'ExampleID',
			'FldEng' => 'Statement Example ID',
			'FldDesc' => 'Indicates the unique Example ID number of the specific statement to be paired with this Example Image.',
			'FldForeignTable' => '40',
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
			'FldID' => 314,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'ImageID',
			'FldEng' => 'Example Image ID',
			'FldDesc' => 'Indicates the unique Example Image ID number of the specific statement to be paired with this Example.',
			'FldForeignTable' => '43',
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
			'FldID' => 315,
			'FldDatabase' => '1',
			'FldTable' => '43',
			'FldSpecSource' => '0',
			'FldName' => 'Filename',
			'FldEng' => 'Filename',
			'FldDesc' => 'Indicates the filename of the Image to be paired with a Statement Example.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 316,
			'FldDatabase' => '1',
			'FldTable' => '43',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Nickname',
			'FldDesc' => 'Indicates a nickname for the Example Image which can be used to identify it in certain lists.',
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
			'FldID' => 317,
			'FldDatabase' => '1',
			'FldTable' => '43',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Copyright',
			'FldEng' => 'Copyright',
			'FldDesc' => 'Indicates any copyright information which should accompany the Example Image when used on the site.',
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
			'FldID' => 319,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'ExampleID',
			'FldEng' => 'Statement Example ID',
			'FldDesc' => 'Indicates the unique Statement Example ID number of the Example delivered to the User for this Play of the game.',
			'FldForeignTable' => '40',
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
			'FldID' => 320,
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
			'FldID' => 321,
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
			'FldID' => 322,
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
			'FldID' => 323,
			'FldDatabase' => '1',
			'FldTable' => '50',
			'FldSpecSource' => '0',
			'FldName' => 'FallacyID',
			'FldEng' => 'Fallacy ID',
			'FldDesc' => 'Indicates the unique Fallacy ID number of the specific type of Fallacy being chosen in response.',
			'FldForeignTable' => '42',
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
			'FldID' => 324,
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
			'FldID' => 325,
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
			'FldID' => 326,
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
			'FldID' => 327,
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
			'FldID' => 328,
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
			'FldID' => 329,
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
			'FldID' => 330,
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
			'FldID' => 331,
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
			'FldID' => 332,
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
			'FldID' => 333,
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
			'FldID' => 334,
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
			'FldID' => 335,
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
			'FldID' => 336,
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
			'FldID' => 337,
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
			'FldID' => 338,
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
			'FldID' => 339,
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
			'FldID' => 340,
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
			'FldID' => 341,
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
			'FldID' => 342,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldSpecType' => 'Replica',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version Number',
			'FldDesc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 343,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldSpecType' => 'Replica',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 344,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldSpecType' => 'Replica',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String For Record',
			'FldDesc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 345,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldSpecType' => 'Replica',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 346,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldSpecType' => 'Replica',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 347,
			'FldDatabase' => '1',
			'FldTable' => '54',
			'FldSpecSource' => '0',
			'FldName' => 'FallacyID1',
			'FldEng' => 'Fallacy #1 ID',
			'FldDesc' => 'Indicates the first unique Fallacy ID number which is similar.',
			'FldForeignTable' => '42',
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
			'FldID' => 348,
			'FldDatabase' => '1',
			'FldTable' => '54',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'FallacyID2',
			'FldEng' => 'Fallacy #2 ID',
			'FldDesc' => 'Indicates the second unique Fallacy ID number which is similar.',
			'FldForeignTable' => '42',
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
	
	DB::table('SL_Definitions')->insert([
			'DefID' => 1,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-url',
			'DefDescription' => 'http://fallacy.homestead.test'
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
			'DefDescription' => 'Fallacies'
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
			'DefDescription' => 'wikiworldorder/fallacy'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 28,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-url',
			'DefDescription' => 'http://fallacy.homestead.test'
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
			'DefDescription' => '/fallacy/uploadslogo-dont-fallacy-me-sm.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 36,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'shortcut-icon',
			'DefDescription' => '/fallacy/uploads/favicon.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 37,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'spinner-code',
			'DefDescription' => '<i class="fa-li fa fa-spinner fa-spin"></i>'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 38,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-analytic'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 39,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-map-key'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 40,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-map-key2'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 41,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-cod-key'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 42,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-cod-key2'
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
			'DefDescription' => '1'
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
			'DefDescription' => '1'
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
#navBurger { border: 1px #622AD5 solid; }
a.btn.btn-secondary:link, a.btn.btn-secondary:visited, a.btn.btn-secondary:active,
a.btn.btn-sm.btn-secondary:link, a.btn.btn-sm.btn-secondary:visited, a.btn.btn-sm.btn-secondary:active,
a.btn.btn-lg.btn-secondary:link, a.btn.btn-lg.btn-secondary:visited, a.btn.btn-lg.btn-secondary:active,
a.btn.btn-xl.btn-secondary:link, a.btn.btn-xl.btn-secondary:visited, a.btn.btn-xl.btn-secondary:active {
color: #FFF;
}
a.btn.btn-secondary:hover, a.btn.btn-sm.btn-secondary:hover, a.btn.btn-lg.btn-secondary:hover, a.btn.btn-xl.btn-secondary:hover {
color: #EEE;
}'
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
	



 } } 