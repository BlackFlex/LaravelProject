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

Route::get('/', function () {
    return view('pages/index');
});


Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/contact','PagesController@contact');


Route::resource('/posts','PostsController');

Route::get('/services','ServicesController@index');


Route::resource('/category','CategoryController');
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


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');


