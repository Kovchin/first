<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


//ROUTE
Route::get('/route', function () {
    return view('route');
});

//ARTISAN
Route::get('/artisan', function () {
    return view('artisan/artisan');
});

//INSTALL
Route::get('/install', function () {
    return view('install');
});

//DB
Route::get('/db', 'MyDb@init');//Главная страница по работе с базой данных
Route::get('/db/sqlQueries', 'MyDb@sqlQueries'); //Прямые SQL запросы
//temp for /db/sqlQueries - секция тестирования прямых SQL запросов
Route::get('test/db/insert', 'MyDb@insert');
Route::get('test/db/reading', 'MyDb@reading');
Route::get('test/db/update', 'MyDb@update');
Route::get('test/db/delete', 'MyDb@delete');

//elequent
Route::get('db/eloquent', 'db\Eloquent@show');

//bootstrap
Route::get('bootstrap', 'bootstrap\Bootstrap@main');

//Test
Route::get('/test/route', array('as' => 'nickname.array', function () {

    $url = route('nickname.array');
    return 'this is a url = '. $url;
})
);
