<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class FAExamples extends Model
{
    protected $table      = 'FA_Examples';
    protected $primaryKey = 'ExaID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'ExaType', 
		'ExaStatement', 
		'ExaSourceUrl', 
		'ExaTotRight', 
		'ExaTotWrong', 
		'ExaDiscussLast', 
		'ExaDiscussTotal', 
		'ExaUserID', 
		'ExaSubmissionProgress', 
		'ExaUniqueStr', 
		'ExaIPaddy', 
		'ExaVersionAB', 
		'ExaTreeVersion', 
		'ExaIsMobile', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
