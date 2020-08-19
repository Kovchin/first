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

        $users = Role::find(3)->user;

        return $users;

    }
    </pre>
</code>
</body>
</html>
