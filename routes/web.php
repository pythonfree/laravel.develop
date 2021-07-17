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


Route::get('/news/{id}', 'NewsController@show')->name('NewsOne');
Route::get('/news', 'NewsController@index')->name('News');


/*Route::get('/news/{id}', function($id) {
    dd($id);
});*/



//Route::get('/', 'HomeController@index');

Route::get('/', 'HomeController@index')->name('Home');
/*Route::get('/',
    [
        'uses' => 'HomeController@index',
        'as' => 'Home'
    ]
);*/

Route::get('/admin', 'Admin\IndexController@index')->name('Admin');
Route::get('/admin/test1', 'Admin\IndexController@test1')->name('test1');
Route::get('/admin/test2', 'Admin\IndexController@test2')->name('test2');
//Route::get('/admin',
//    [
//        'uses' => 'Admin\IndexController@index',
//        'as' => 'Admin'
//    ]
//);



/*Route::get('/', function () {
//    return view('welcome');
//    return 'Hello World!!!!';
//    info('1111');
    return view('index');
});*/
