<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class FAGameSessions extends Model
{
    protected $table      = 'FA_GameSessions';
    protected $primaryKey = 'SesID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'SesVersionAB', 
		'SesSubmissionProgress', 
		'SesIPaddy', 
		'SesTreeVersion', 
		'SesUniqueStr', 
		'SesUserID', 
		'SesIsMobile', 
		'SesScore', 
		'SesDifficulty', 
    ];
    
    // END Survloop auto-generated portion of Model
    
}
