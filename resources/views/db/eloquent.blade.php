<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent</title>
</head>
<body>
<h1>Eloquent</h1>

<p>Eloquent - это библиотека для работы с базой данных</p>

<h2>Модель</h2>

<p>Для работы с базами данных, да собственно и вообще с данными в концепции MVC  подразумевается слой model</p>
<p>Модель - класс для работы с данными в концепции MVC</p>

<p>Если создавать модель командой <code>php artisan make:model NameModel -m</code></p>
<p>Флаг -m создаст миграцию с именем NameModel</p>
<p>То есть в рассматриваемой концепции работы с базой данных NameModel - имя таблицы</p>
<h4>Путь расположения моделей</h4>
<p><code>app/</code></p>
<h2>Методы и свойства моделей</h2>

<p><code>protected $table = 'Имя таблицы';</code> - задается имя таблицы в базе данных (по умолчанию соответствует имени модели только во множественном числе к примеру у модели <b>Post</b> считается что таблица <b>posts</b>)</p>
<p><code>protected $primaryKey = 'id';</code> - имя первичного ключа (по умолчанию id)</p>

<p>
    <p>Описание имен полей базы данных для добавления с помомщью массива</p>
    <code>
        protected $fillable =
        [
        'title',
        'post'
        ];
    </code>
</p>

<h2>Обращение к методам и свойствам модели во view и в учебном случае контроллере</h2>

<h3>Все записи таблицы</h3>
<p><a href="/db/eloquent/posts/show">Результат</a></p>
<code>
    <pre>
        <b>$posts = Post::all();</b>
//вывод
        foreach ($posts as $post){
            return $post->title;
        }
    </pre>
</code>

<h3>Поиск записи по идентификатору</h3>

<p><a href="/db/eloquent/post/find">Результат</a></p>

<code>
    <pre>
        <b>$post = Post::find(1);</b>

        return $post->title;
    </pre>
</code>

<h3>Более сложный запрос с параметрами сортировки конечного результата</h3>

<h4>1</h4>

<p><a href="/db/eloquent/post/find2">Результат</a></p>

<code>
    <pre>
        <b>$posts = Post::where('title', 'первая запись')->orderBy('id', 'desc')->get();</b>

        return $posts;
    </pre>
</code>
<ul>
    <li><p>where('title', 'первая запись') - найди вес записи где поле title = 'первая запись'</p></li>
    <li><p>orderBy('id', 'desc') - отсортируй по убыванию 'id'</p></li>
    <li><p>get() - выполнить запрос</p></li>
</ul>

<h4>2</h4>
<p><a href="/db/eloquent/post/find4">Результат</a></p>

<code>
    <pre>
        <b>$post = Post::where('id', '>', 2)->firstOrFail();</b>

        return $post;
    </pre>
</code>

<h3>Найти или вернуть исключение</h3>

<p><a href="/db/eloquent/post/find3">Результат</a></p>

<code>
    <pre>
        <b>$post = Post::findOrFail(1);</b>

        return $post;
    </pre>
</code>

<h3>Добавить запись</h3>

<p><a href="/db/eloquent/post/insert">Пример</a></p>

<pre>
    <code>
        $post = new Post;

        $post->title = 'Дабавленная новая запись';
        $post->content = 'Тескт добавленной новой записи';

        $post->save();
    </code>
</pre>

<h3>Замена данных существующей записи</h3>

<p>По сути то же самое что и добавление записи только изначально мы находим то куда добавлять </p>

<p><a href="/db/eloquent/post/change">Пример</a></p>

<pre>
    <code>
        $post = Post::find(2);

        $post->title = 'Дабавленная новая запись';
        $post->content = 'Тескт добавленной новой записи';

        $post->save();
    </code>
</pre>

<h3>Еще один способ добавления записи</h3>

<p>Обратите внимаение что для использования этого способа необходимо в модели прописать имена полей базы данных</p>
<p><a href="/db/eloquent/post/insert2">Пример</a></p>

<code>
    <pre>
        $post = Post::create(['title'=>'Новая запись добавленная массивом', 'post'=>'Текст записи добавленной массивом']);

        return $post;
    </pre>
</code>

<h3>Еще один способ модификации записи при помои конструктора запросов</h3>
<p>Как и в предыдущем способе для модификации таким образом мы должны в модели явно прописать все поля нашей базы данных <code>
        protected $fillable = ['имя первого поля', 'имя второго поля'];
    </code></p>
<p><a href="/db/eloquent/post/change2">Пример</a></p>

<code>
    <pre>
$post = Post::where('id', 3)->where('is_admin',0)->update(['title'=>'Обновили вторым способом','post'=>'Тест записи обновленной вторым способом']);

    return $post;
    </pre>
</code>

<h3>Удаление записи</h3>

<p><a href="/db/eloquent/post/delete">Пример</a></p>

<code>
    <pre>
        $post = Post::find(1);
        $post->delete();

        return $post;
    </pre>
</code>

<h3>Удаление записи при помощи конструктора запросов</h3>

<p><a href="/db/eloquent/post/delete2">Пример</a></p>

<code>
    <pre>
        $post = Post::where('id', 2)->delete();

        return $post;
    </pre>
</code>

<h3>Удаление записи треттим способом</h3>
<p><a href="/db/eloquent/post/delete3">Пример</a></p>

<code>
    <pre>
        $post = Post::destroy(3);

        return $post;
    </pre>
</code>

<p>Удалять можно и не по одной записи.</p>
<p>Пример писать не стал, но конструкция следующая</p>
<code>
    <pre>
          $post = Post::destroy([2,3,4]);
    </pre>
</code>
    <h2>Soft Delete</h2>

    <p>При активации этой функцианальности при удалении записи из базы данных, как такового удаления не происходит, а тольуо выставляется флаг deleted_ad со временем когда было произведена попытка удаления записи, а далее все запросы в Laravel будут происходить как будто эту запись дейсьвиьельно удалили</p>
    <h3>Порядок активации этого функцианала для таблицы</h3>

<h4>В модели </h4>
    <code>use Illuminate\Database\Eloquent\SoftDeletes;</code>

<p>в моделе обьявить что используем мягкое удаление</p>
<code>use SoftDeletes;</code>
<p>и объявить поле</p>
    <code>protected $dates = ['deleted_at'];</code>
<h4>Создать миграцию</h4>
<code>
    php artisan make:migration add_deleted_at_column_to_posts_table --table=posts
</code>
<h4>В миграции прописать новое поле</h4>
<p>в секции up</p>
<code>
    $table->softDeletes();
</code>
<p>и в секции down</p>
<code>
    $table->dropColumn('deleted_at');
</code>

<h3>Пример удаления/восстановления и перманентного удаления с этим функцианалом</h3>

<h3>Удаление</h3>
<p><a href="/db/eloquent/post/softDelete">Пример</a></p>
<code>
    <pre>
        $post = Post::destroy(1);

        return $post;
    </pre>
</code>

<h3>Просмотр удаленной записи</h3>
<p><a href="/db/eloquent/post/softDelete/show">Пример</a></p>
<p>как видим ничего не выводится, как будто записи действительно нет</p>
<code>
    <pre>
        $post = Post::find(1);

        return $post;
    </pre>
</code>

<h3>Как посмотреть записи вместе с удаленными softDelete</h3>
<p><a href="/db/eloquent/post/softDelete/show2">Пример</a></p>
<code>
    <pre>
        $post = Post::withTrashed()->where('id', 1)->get();

        return $post;
    </pre>
</code>
<h3>Как посмотреть только удаленные записи</h3>
<p><a href="/db/eloquent/post/softDelete/show3">Пример</a></p>
<code>
    <pre>
        $post = Post::onlyTrashed()->where('is_admin', 0)->get();

        return $post;
    </pre>
</code>
<h3>Восстановление удаленной записи</h3>
<p><a href="/db/eloquent/post/softDelete/restore">Пример</a></p>
<code>
    <pre>
        $post = Post::withTrashed()->where('id', 1)->restore();

        return $post;
    </pre>
</code>
<h3>Перманентное удаление записи из базы данных с активированной функцией softDelete</h3>
<p><a href="/db/eloquent/post/softDelete/forceDelete">Пример</a></p>
<code>
    <pre>
        $post = Post::onlyTrashed()->where('id',2)->forceDelete();

        return $post;
    </pre>
</code>
</body>
</html>
