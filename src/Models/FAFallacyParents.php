<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class FAFallacyParents extends Model
{
    protected $table      = 'FA_FallacyParents';
    protected $primaryKey = 'FalParID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'FalParParentID', 
		'FalParChildID', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
