<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class FAUserStats extends Model
{
    protected $table      = 'FA_UserStats';
    protected $primaryKey = 'UsrStatID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'UsrStatUserID', 
		'UsrStatLastLogin', 
		'UsrStatTotSessions', 
		'UsrStatPersonalBest', 
		'UsrStatTotScoreEasy', 
		'UsrStatTotScoreMedium', 
		'UsrStatTotScoreHard', 
		'UsrStatTotExamples', 
		'UsrStatTotImages', 
		'UsrStatTotThreads', 
		'UsrStatTotalComments', 
    ];
    
    // END Survloop auto-generated portion of Model
    
}
