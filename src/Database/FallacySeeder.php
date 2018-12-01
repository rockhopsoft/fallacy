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
			'DbTables' => '3',
			'DbFields' => '7'
		]);
	
	DB::table('SL_Tables')->insert([
			'TblID' => 29,
			'TblDatabase' => '1',
			'TblAbbr' => 'Inst',
			'TblName' => 'Installations',
			'TblEng' => 'SurvLoop Installations',
			'TblDesc' => 'This represents each website or system which is currently powered by SurvLoop.'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 30,
			'TblDatabase' => '1',
			'TblName' => 'users',
			'TblEng' => 'Users',
			'TblDesc' => 'This represents the Laravel Users table, but will not actually be implemented by SurvLoop as part of the database installation.',
			'TblGroup' => 'Users',
			'TblOrd' => '15',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 40,
			'TblDatabase' => '1',
			'TblAbbr' => 'FalEx',
			'TblName' => 'FallacyExamples',
			'TblEng' => 'Fallacy Examples',
			'TblDesc' => 'This is the whole game!',
			'TblNumFields' => '7',
			'TblNumForeignKeys' => '1'
		]);
	
	DB::table('SL_Fields')->insert([
			'FldID' => 280,
			'FldDatabase' => '1',
			'FldTable' => '40',
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
			'FldSpecType' => 'Replica',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldOpts' => '39'
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
			'DefDescription' => '#416CBD'
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
			'DefDescription' => '#EDF8FF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 8,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-faintr',
			'DefDescription' => '#F9FCFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 9,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-on',
			'DefDescription' => '#2B3493'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 10,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-off',
			'DefDescription' => '#53F1EB'
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
			'DefDescription' => '#EC2327'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 14,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-danger-off',
			'DefDescription' => '#F38C5F'
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
			'DefDescription' => '#999'
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
			'DefDescription' => '#2B3493'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 23,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-nav-bg',
			'DefDescription' => '#444'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 24,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-nav-text',
			'DefDescription' => '#FFF'
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
			'DefDescription' => '/fallacy/uploads/logo2-300b.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 34,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-md',
			'DefDescription' => '/fallacy/uploads/logo2-300b.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 35,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-sm',
			'DefDescription' => '/fallacy/uploads/logo2-300b.png'
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
			'DefDescription' => '#mainNav { background: url(/fallacy/uploads/falListLinkBG-big.jpg); background-size: cover; border-bottom: 1px #222 solid; }
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
	

	DB::table('SL_Tree')->insert([
			'TreeID' => 1,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey',
			'TreeName' => 'Don\'t Fallacy Me Game',
			'TreeDesc' => 'This is the whole game!',
			'TreeSlug' => 'game',
			'TreeRoot' => '48',
			'TreeFirstPage' => '49',
			'TreeLastPage' => '49',
			'TreeCoreTable' => '40'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 2,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Don\'t Fallacy Me Game',
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
			'TreeID' => 14,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Don\'t Fallacy Me Game',
			'TreeSlug' => 'don-t-fallacy-me-game',
			'TreeRoot' => '43',
			'TreeCoreTable' => '40'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 15,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Don\'t Fallacy Me Game',
			'TreeSlug' => 'don-t-fallacy-me-game',
			'TreeCoreTable' => '40'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 16,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Don\'t Fallacy Me Game',
			'TreeSlug' => 'don-t-fallacy-me-game',
			'TreeCoreTable' => '40'
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
			'NodeID' => 42,
			'NodeTree' => '14',
			'NodeType' => 'XML',
			'NodePromptText' => 'FallacyExamples',
			'NodePromptNotes' => '40'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 43,
			'NodeTree' => '14',
			'NodeType' => 'XML',
			'NodePromptText' => 'FallacyExamples',
			'NodePromptNotes' => '40'
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
			'NodeID' => 47,
			'NodeTree' => '15',
			'NodeType' => 'XML',
			'NodePromptText' => 'FallacyExamples',
			'NodePromptNotes' => '40'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 48,
			'NodeTree' => '1',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Don\'t Fallacy Me Game'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 49,
			'NodeTree' => '1',
			'NodeParentID' => '48',
			'NodeType' => 'Page',
			'NodePromptText' => 'Welcome To Don\'t Fallacy Me Game',
			'NodePromptNotes' => 'welcome'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 50,
			'NodeTree' => '1',
			'NodeParentID' => '49',
			'NodeType' => 'Text',
			'NodePromptText' => '<h2 class="slBlueDark">Welcome</h2>This is a sample question to a user. What will you ask them first?'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 51,
			'NodeTree' => '16',
			'NodeType' => 'XML',
			'NodePromptText' => 'FallacyExamples',
			'NodePromptNotes' => '40'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 52,
			'NodeTree' => '2',
			'NodeType' => 'XML',
			'NodePromptText' => 'FallacyExamples',
			'NodePromptNotes' => '40'
		]);

 } } 