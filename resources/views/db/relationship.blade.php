<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>relationship</title>
</head>
<body>
<h1>Relationship</h1>

<h2>Один к одному</h2>

<h3>Миграция</h3>
<p>При регистрации полей в child таблице создаем поле для связи</p>
<code>$table->integer('user_id')->unsigned();</code>

<h3>Модель</h3>
<p>Задаем связь один к одному в модели parent таблице</p>
<code>
    <pre>
    public function post(){

        return $this->hasOne('App\Post', 'user_id');

    }
    </pre>
</code>
<ul>
    <li><p>Первый параметр это пространство имен модели child таблицы</p></li>
    <li>
        <p>Второй параметр по умолчанию строится <code>tableName</code>_<code>id</code></p>
        <p>То есть в данном случае можно было написать <code>$this->hasOne('App\Post')</code></p>
    </li>
    <li><p>Еще есть треттий параметр если ключевое поле не 'id' - тогда имя указывают треттим параметром при вызове
            функции hasOne</p></li>
</ul>
<p>Задаем пространство имен к parent таблице</p>
<p><code>use App\User;</code></p>

<p><a href="/db/relationship/oneToOne/user/{id}/post">Пример</a></p>
<p>Обрати внимание мы ищем запись по id пользователя, а выводим по таблице post</p>
<code>
    <pre>
        <b>$userId = User::find($id)->post;</b>

        return $userId;
    </pre>
</code>

<h2>Один к одному обратный вызов</h2>
<p><a href="/db/relationship/oneToOneReverse/post/{id}/user">Пример</a></p>
<h3>В модели child</h3>

<code>
    <pre>
        public function user(){

        return $this->belongsTo('App\User');

    }
    </pre>
</code>

<h3>Контроллер</h3>

<p>Задаем пространство имен Parent таблицы <code>use App\Post;</code></p>

<p>И реализация метода</p>

<p>Так же как и в предыдущем примере мы ищем пост, но выводим пользователя что его создал</p>
<code>
    <pre>
        $user = Post::find($id)->user;

        return $user;
    </pre>
</code>

<h2>Один ко многим</h2>

<p><a href="/db/relationship/oneToMany/user/{id}/post">Пример</a></p>

<h3>Модель</h3>

<code>
    <pre>
        public function posts(){

        return $this->hasMany('App\Post');
    }
    </pre>
</code>

<h3>Контроллер</h3>

<code>
    <pre>

    public function oneToMany($id){

        $post = User::find($id)->posts;

        return $post;
    }

    </pre>
</code>

<h4>Еще один вариант обращения к данным</h4>

<code>
    <pre>

    </pre>
</code>

<h3>Один ко многим обратный вызов</h3>

<p><a href="/db/relationship/oneToManyReverse/post/{id}/user">Пример</a></p>

<h3>
    Модель
</h3>

<code>
    <pre>

    public function userOneToManyReverse(){

        return $this->belongsTo('App\User','user_id');
    }

    </pre>
</code>

<h3>Контроллер</h3>

<code>
    <pre>
        public function oneToManyInverse($id){

        $user = Post::find($id)->userOneToManyReverse;

        return $user;
    }

    </pre>
</code>

<h3>Отношение многие ко многим</h3>

<h3>1</h3>

<p><a href="/db/relationship/manyToMany/user/1/role">Пример</a></p>

<h4>Миграции</h4>

<h5>roles</h5>

<code>
    <pre>
        public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->timestamps();
        });
    }
    </pre>
</code>

<h5>role_user</h5>

<code>
    <pre>
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('role_id');
            $table->timestamps();
        });
    }
    </pre>
</code>

<h4>Модель</h4>

<code>
    <pre>
class Role extends Model
{

    public function user(){

        return $this->belongsToMany('App\User');

    }

}
    </pre>
</code>

<h4>Контроллер</h4>

<code>
    <pre>
    public function manyToMany($id){

        $users = Role::find($id)->user;

        return $users;

    }
    </pre>

    <h3>2</h3>

    <p><a href="/db/relationship/manyToMany/user/role">Пример</a></p>

    <h4>Контроллер</h4>

    <code>
        <pre>
    public function manyToMany2(){

        $roles = Role::find(1)->user;

        return $roles;
    }
        </pre>
    </code>

    <h3>3</h3>

    <p><a href="/db/Relationship/manyToMany/user/1/role3">Пример</a></p>

    <h4>Роутер</h4>

    <code>
        <pre>
            Route::get('/db/Relationship/mantToMany/user/{id}/role3', 'db\RelationShip@manyToMany3');
        </pre>
    </code>

    <h4>Модель</h4>

    <p>Обрати внимание как явно указываются названия таблиц и полей (пу сути в нашем случае в этом нет необходимости так
        как названия следуют принятым в Laravel соглашениям, но если поля или названия таблиц базы данных уже жестко
        прописаны и отличаются то можно пользоваться таким способом объявления зависимостей в Модели)</p>

    <code>
        <pre>
            public function roles(){

        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
    }

        </pre>
    </code>

    <h4>Контроллер</h4>

    <code>
        <pre>
                public function manyToMany3($id){

        $user = User::find($id);

        return $user->roles;

    }
        </pre>
    </code>
    <h4>Доступ к данным промежуточной таблицы</h4>

    <p><a href="/db/relationship/manyToMany/user/1/role/pivot">Пример</a></p>

    <h4>Роутер</h4>

    <code>
        <pre>
            Route::get('/db/relationship/manyToMany/user/{id}/role/pivot', 'db\RelationShip@manyToMany4');
        </pre>
    </code>

    <h4>Модель</h4>

    <code>
    <pre>
            public function roles()
    {

        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id')-><b>withPivot('created_at')</b>;
    }
    </pre>
    </code>

    <h4>Контроллер</h4>

    <h5>Пример 1</h5>

    <code>
        <pre>
                public function manyToMany4($id)
    {

        $user = User::find($id);

        return $user->roles[0]['pivot']['created_at'];
    }
        </pre>
    </code>

    <h5>Пример 2</h5>

    <code>
        <pre>
                public function manyToMany4($id)
    {

        $user = User::find($id);

        //return $user->roles[0]['pivot']['created_at'];

        foreach ($user->roles as $role){
            return $role->pivot->created_at;
        }
    }
        </pre>
    </code>

    <h2>Многие ко многим через</h2>

    <p>Нужно получить все посты пользователей конкретной страны</p>
    <p>Причем в странах нет ничего кроме имен стран</p>
    <p>А в постах есть только ссылка на пользователя что его создал</p>
    <p>Связь пользователя и страны откуда он идет через таблицу пользователей</p>

    <p>Countryes</p>

    <ul>
        <li>id</li>
        <li>name</li>
    </ul>

    <p>Users</p>

    <ul>
        <li>id</li>
        <li>name</li>
        <li>country_id</li>
    </ul>

    <p>Posts</p>

    <ul>
        <li>id</li>
        <li>user_id</li>
        <li>title</li>
        <li>post</li>
    </ul>

    <p><a href="/db/relationship/hasManyThrough/country/1/posts">Пример</a></p>

    <h3>artisan</h3>

    <code>
        <pre>
            php artisan make:Model Country -m
        </pre>
    </code>

    <h3>Миграция</h3>

    <code>
        <pre>
                public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }
        </pre>
    </code>

    <h3>Роутер</h3>

    <code>
        <pre>
Route::get('/db/relationship/hasManyThrough/country/{id}/posts', 'db\RelationShip@hasManyThrough');
        </pre>
    </code>

    <h3>Модель</h3>

    <code>
        <pre>
use App\Country;

                public function hasManyThrough($id){
        $country = Country::find($id);

        return  $country->posts;
    }


        </pre>
    </code>

    <h3>Контроллер Country</h3>

    <p>Вся заковыка тут</p>

    <p>запрашиваем в таблице App\Post в которой есть индекс на пользователя user_id из таблицы App\User у которой в сою
        очередь есть поле country_id</p>

    <code>
        <pre>
    public function posts(){
        return $this->hasManyThrough('App\Post', 'App\User', 'country_id', 'user_id');
    }
        </pre>
    </code>

    <h2>Полтморфная свзяь</h2>

    <p><a href="/db/relationship/polymorphic/user/1/photo">Пример1</a></p>
    <p><a href="/db/relationship/polymorphic/post/1/photo">Пример2</a></p>

    <h3>Миграция</h3>
    Photo
    <code>
        <pre>
                 Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->integer('imageable_id');
            $table->string('imageable_type');
            $table->timestamps();
        });
        </pre>
    </code>

    <h3>Роутер</h3>
    <code>
        <pre>
            Route::get('/db/relationship/polymorphic/user/{id}/photo', 'db\RelationShip@polymorphic');
        Route::get('/db/relationship/polymorphic/post/{id}/photo', 'db\RelationShip@polymorphic1');
        </pre>
    </code>

    <h3>Модель</h3>

    <h4>
        Photo
    </h4>

    <code>
        <pre>
                public function imageable(){

        return $this->morphTo();

    }
        </pre>
    </code>

    <h4>User</h4>

    <code>
        <pre>
                public function photos()
    {

        return $this->morphMany('App\Photo', 'imageable');
    }
        </pre>
    </code>

    <h4>Post</h4>

    <code>
        <pre>
                public function photos()
    {
        return $this->morphMany('App\Photo', 'imageable');
    }
        </pre>
    </code>

    <h3>Контроллер</h3>

<code>
    <pre>
            public function polymorphic($id)
    {
        $user = User::find($id);

        return $user->photos;
    }

    public function polymorphic1($id)
    {
        $post = Post::find($id);

        return $post->photos;
    }
    </pre>
</code>

    <h2>Обратный вызов</h2>

    <p><a href="db/relationship/polymorphic/photo/1">Пример</a></p>

    <h3>Роутер</h3>

    <code>
        <pre>
            Route::get('db/relationship/polymorphic/photo/{id}', 'db\RelationShip@polymorphic2');
        </pre>
    </code>

    <h3>Контроллер</h3>

    <code>
        <pre>
    public function polymorphic2($id){

        $photo = Photo::findOrFail($id);

        return $photo->imageable;
    }
        </pre>
    </code>

</body>
</html>
