<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get(
        '/fal-js/fallacy-descs.js',
        'Fallacy\Controllers\FallacyUtils@getFallacyDescJs'
    );

    Route::get(
        '/fallacy-example/{fallacyID}',
        'Fallacy\Controllers\Fallacy@loadExamplePage'
    );
    Route::get(
        '/fallacy-example/{fallacyID}/{fallacyStatement}',
        'Fallacy\Controllers\Fallacy@loadExamplePage'
    );

    
});    

?>