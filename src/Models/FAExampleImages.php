<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class FAExampleImages extends Model
{
    protected $table      = 'FA_ExampleImages';
    protected $primaryKey = 'ExaImgID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'ExaImgVersionAB', 
		'ExaImgSubmissionProgress', 
		'ExaImgFilename', 
		'ExaImgIPaddy', 
		'ExaImgTreeVersion', 
		'ExaImgUniqueStr', 
		'ExaImgUserID', 
		'ExaImgIsMobile', 
		'ExaImgName', 
		'ExaImgCopyright', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
