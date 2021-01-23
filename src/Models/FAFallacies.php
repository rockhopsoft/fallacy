<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class FAFallacies extends Model
{
    protected $table      = 'FA_Fallacies';
    protected $primaryKey = 'FalID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'FalCategoryType', 
		'FalEnglish', 
		'FalLatin', 
		'FalAka', 
		'FalDesc', 
		'FalCategoryDesc', 
		'FalTotExamples', 
        'ord',
        'similars',
        'video'
    ];
    
    // END Survloop auto-generated portion of Model
    
}
