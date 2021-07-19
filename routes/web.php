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

Route::group([
    'prefix' => 'news',
    'as' => 'news.'
], function(){
    Route::get('/', 'NewsController@index')->name('index');
    Route::get('/one/{name}', 'NewsController@show')->name('show');
    Route::group([
        'as' => 'category.'
    ], function(){
        Route::get('/categories', 'CategoryController@index')->name('index');
        Route::get('/category/{id}', 'CategoryController@show')->name('show');
    });
});



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


/*
|--------------------------------------------------------------------------
| Админка
|--------------------------------------------------------------------------
|
| Функции админа
|
*/
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/test1', 'IndexController@test1')->name('test1');
    Route::get('/test2', 'IndexController@test2')->name('test2');
});

/*Route::get('/admin', 'Admin\IndexController@index')->name('admin.index');
Route::get('/admin/test1', 'Admin\IndexController@test1')->name('admin.test1');
Route::get('/admin/test2', 'Admin\IndexController@test2')->name('admin.test2');*/



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
