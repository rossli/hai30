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

Auth::loginUsingId(7);

Route::get( '/', function ()
{
    //echo '234234';die;
    return view( 'welcome' );
} );

Route::get('articles','ArticlesController@index')->name('articles');
Route::get('/articles/create','ArticlesController@create')->name('articles.create');
Route::get('/articles/{id}','ArticlesController@show')->name('articles.show');
Route::post('/articles','ArticlesController@store')->name('articles.store');
Route::get('/articles/{id}/edit','ArticlesController@edit')->name('articles.edit');
Route::patch('/articles/{id}/update','ArticlesController@update')->name('articles.update');

Route::get('auth/login','Auth\AuthController@getLogin')->name('auth.getlogin');
Route::post('auth/login','Auth\AuthController@postLogin')->name('auth.postlogin');

Route::get('auth/register','Auth\AuthController@getRegister')->name('auth.getregister');
Route::post('auth/register','Auth\AuthController@postRegister')->name('auth.postregister');

Route::get('auth/logout','Auth\AuthController@getLogout')->name('auth.getlogout');


Route::get('/test/middleware',['middleware'=>'admin',function()
{
    return '是管理员';
}]);


Route::get('/test',function()
{
    // hello
    new Ross\Test\Test();
});

Route::get('/help',function()
{
   new  Help\Helpers();
});

Route::get('/ross','RossController@index');
Route::get('/rock','TestController@rock');

Route::get('/lessons',function()
{
    $lessons = \App\Lesson::all();
    return view('lessons.index',compact('lessons'));
});