<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use League\Flysystem\Config;

///////////////pages////////////////////////////////
/*Route::group([
    'prefix'    => app()->getLocale()
],function (){

    Route::get('/', function () {
        return view('pages/index');
    });
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/services','ServicesController@index');
Route::resource('/posts','PostsController');
Route::resource('/category','CategoryController');
Route::get('/dashboard', 'DashboardController@index');
Auth::routes();
*/

/*Route::get('/{lang?}',function ($lang=null){
    if($lang=='en' || $lang=='ru') {
        App::setlocale($lang);
        return view('pages/index');
    }
    else{
        return abort(404);
    }
});*/
Route::get('/', function () {
    return view('pages/index');
});
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/services','ServicesController@index');
Route::resource('/posts','PostsController');
Route::resource('/category','CategoryController');
Route::get('/dashboard', 'DashboardController@index');
Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//});
/*
Route::group([
    'prefix'    =>  Config::get('routLang')
],function (){
    Route::get('/about','PagesController@about');
    Route::get('/', function () {
        return view('pages/index');
    });


    Route::get('/contact','PagesController@contact');
});

*/

















//Route::get('/catAdd','CategoryController@create');
//Route::get('/category','CategoryController@store');


/*
Route::get('/posts','PostsController@index');
Route::get('/post','PostsController@show');
Route::get('/post/add','PostsController@create');
*/
/*
Route::get('/users/{id}/{name}',function($id,$name){
    return 'This is users id-> '.$id.': And name :D-> '.$name;
});
*/








