<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class FAGamePlay extends Model
{
    protected $table      = 'FA_GamePlay';
    protected $primaryKey = 'GPID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'GPVersionAB', 
		'GPSubmissionProgress', 
		'GPIPaddy', 
		'GPTreeVersion', 
		'GPUniqueStr', 
		'GPUserID', 
		'GPIsMobile', 
		'GPFallacyID', 
		'GPUrl', 
    ];
    
    // END Survloop auto-generated portion of Model
    
}
