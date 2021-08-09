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
    Route::get('/one/{news}', 'NewsController@show')->name('show');
    Route::group([
        'as' => 'category.'
    ], function(){
        Route::get('/categories', 'CategoryController@index')->name('index');
        Route::get('/category/{name}', 'CategoryController@show')->name('show');
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

    //CRUD NEWS
    Route::get('/', 'NewsController@index')->name('index');
    Route::match(['get', 'post'],'/create', 'NewsController@create')->name('create');
    Route::get('/edit{news}', 'NewsController@edit')->name('edit');
    Route::post('/update/{news}', 'NewsController@update')->name('update');
    Route::get('/destroy/{news}', 'NewsController@destroy')->name('destroy');



    Route::get('/downloadImage', 'IndexController@downloadImage')->name('downloadImage');
    Route::get('/json', 'IndexController@json')->name('json');
});


Route::view('/vue', 'vue')->name('vue');


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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('/newsCrud', 'Test');
