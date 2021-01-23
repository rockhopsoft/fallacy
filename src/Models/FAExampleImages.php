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
		'ExaImgUserID', 
		'ExaImgStatus', 
		'ExaImgFilename', 
		'ExaImgName', 
		'ExaImgCopyright', 
		'ExaImgVersionAB', 
		'ExaImgSubmissionProgress', 
		'ExaImgIPaddy', 
		'ExaImgTreeVersion', 
		'ExaImgUniqueStr', 
		'ExaImgIsMobile', 
    ];
    
    // END Survloop auto-generated portion of Model
    
}
