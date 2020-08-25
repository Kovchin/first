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
//Главная страница по работе с базой данных
Route::get('/db', 'MyDb@init');
//Прямые SQL запросы
Route::get('/db/sqlQueries', 'MyDb@sqlQueries');
//temp for /db/sqlQueries - секция тестирования прямых SQL запросов
Route::get('test/db/insert', 'MyDb@insert');
Route::get('test/db/reading', 'MyDb@reading');
Route::get('test/db/update', 'MyDb@update');
Route::get('test/db/delete', 'MyDb@delete');

//elequent
Route::get('db/eloquent', 'db\Eloquent@show');
//показать все записи таблицы post по полю title
Route::get('db/eloquent/posts/show', 'db\Eloquent@postsShow');
//найти первую запись в таблице и отобразить ее
Route::get('db/eloquent/post/find', 'db\Eloquent@postFind');
//Более сложный запрос сортировки
Route::get('db/eloquent/post/find2', 'db\Eloquent@postFind2');
//Найти по id или вернуть исключение
Route::get('db/eloquent/post/find3', 'db\Eloquent@postFind3');
//Еще один параметрический запрос
Route::get('db/eloquent/post/find4', 'db\Eloquent@postFind4');
//Добавление записи
Route::get('db/eloquent/post/insert', 'db\Eloquent@postInsert');
//Изменение записи
Route::get('db/eloquent/post/change', 'db\Eloquent@postChange');
//Добавление записи (второй метод)
Route::get('db/eloquent/post/insert2', 'db\Eloquent@postInsert2');
//Обновление записи при помощи констрактора запросов
Route::get('db/eloquent/post/change2', 'db\Eloquent@postChange2');
//Удаление записи
Route::get('/db/eloquent/post/delete', 'db\Eloquent@postDelete');
//Удаление при помощи конструктора запросов
Route::get('/db/eloquent/post/delete2', 'db\Eloquent@postDelete2');
//Удаление записи треттим способом
Route::get('/db/eloquent/post/delete3', 'db\Eloquent@postDelete3');
//Мягкое удаления (ничем не отличается от обычного удаления записи, кроме того что самого удаления не происходит, а только выставляется время когда быда выдана команда удалить запись из базы данных)
Route::get('/db/eloquent/post/softDelete', 'db\Eloquent@softDelete');
//Простой просмотр удаленной записи
Route::get('/db/eloquent/post/softDelete/show', 'db\Eloquent@softDeleteShow');
//Просмотр записей вместе с удаленными
Route::get('/db/eloquent/post/softDelete/show2', 'db\Eloquent@softDeleteShow2');
//Просмотре только удаленных записей
Route::get('/db/eloquent/post/softDelete/show3', 'db\Eloquent@softDeleteShow3');
//Восстановление удаленной записи
Route::get('/db/eloquent/post/softDelete/restore', 'db\Eloquent@softDeleteRestore');
//Перманентное удаление записи из базы данных при настроенной softDelete
Route::get('/db/eloquent/post/softDelete/forceDelete', 'db\Eloquent@softDeleteForceDelete');

//Отношения полей в базах данных главная
Route::get('db/relationship', 'db\Relationship@main');
//Один к одному
Route::get('/db/relationship/oneToOne/user/{id}/post', 'db\Relationship@oneToOne');
//Один к одному обратный вызов
Route::get('/db/relationship/oneToOneReverse/post/{id}/user', 'db\Relationship@oneToOneInverse');
//Один ко многим
Route::get('/db/relationship/oneToMany/user/{id}/post', 'db\Relationship@oneToMany');
//Один ко многим обратный вызов
Route::get('/db/relationship/oneToManyReverse/post/{id}/user', 'db\Relationship@oneToManyInverse');
//Многие ко многим
Route::get('/db/relationship/manyToMany/user/{id}/role', 'db\Relationship@manyToMany');
//Многие ко многим вывод все таблиицы
Route::get('/db/relationship/manyToMany/user/role', 'db\RelationShip@manyToMany2');
//Многие ко многим обратный вызов (хотя в данном случае тут нет такого понятия как обратный вызов)
Route::get('/db/Relationship/manyToMany/user/{id}/role3', 'db\RelationShip@manyToMany3');
//Многие ко многим доступ к промежуточной таблице
Route::get('/db/relationship/manyToMany/user/{id}/role/pivot', 'db\RelationShip@manyToMany4');
//Многие ко многим через
Route::get('/db/relationship/hasManyThrough/country/{id}/posts', 'db\RelationShip@hasManyThrough');
//Полиморфная связь (связь когда в базе есть ссылка на таблицу индекс которой будет использоваться)
Route::get('/db/relationship/polymorphic/user/{id}/photo', 'db\RelationShip@polymorphic');
Route::get('/db/relationship/polymorphic/post/{id}/photo', 'db\RelationShip@polymorphic1');
//Полиморфная связь в обратном направлении
Route::get('/db/relationship/polymorphic/photo/{id}', 'db\RelationShip@polymorphic2');
//Многие ко многим полиморфная связь
Route::get('/db/relationship/polymorphic/showPhoto/{id}', 'db\RelationShip@polymorphic3');
//Многие ко многим полиморфная связь обратный вызов
Route::get('/db/relationship/polymorphic/tag/post/{id}', 'db\RelationShip@polymorphic4');


//TODO https://si-dev.com/ru/blog/laravel-html-to-pdf
//TODO 72 урок
//Проверка работоспособности Git
//Test
Route::get('/test/route', array('as' => 'nickname.array', function () {

        $url = route('nickname.array');
        return 'this is a url = '. $url;
    })
);
