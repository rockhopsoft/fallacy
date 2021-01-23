<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class FAGamePlays extends Model
{
    protected $table      = 'FA_GamePlays';
    protected $primaryKey = 'PlaID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'PlaUserID', 
		'PlaSessionID', 
		'PlaExampleID', 
		'PlaTotalRight', 
		'PlaTotalWrong', 
		'PlaScore', 
		'PlaDifficulty', 
		'PlaIPaddy', 
		'PlaIsMobile', 
		'PlaTreeVersion', 
		'PlaVersionAB', 
		'PlaUniqueStr', 
		'PlaSubmissionProgress', 
    ];
    
    // END Survloop auto-generated portion of Model
    
}
