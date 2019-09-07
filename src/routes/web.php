<?php
/**
 * Created by PhpStorm.
 * User: dckap
 * Date: 7/9/19
 * Time: 11:32 AM
 */
/*Route::get('/sample',function (){
    return 'sample';
});*/
$namespace = 'Swathi\Sample\Http\Controllers';

Route::group(['namespace' => $namespace], function (){
    Route::get('/sample','SampleController@index');
});