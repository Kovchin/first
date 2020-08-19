<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Db</title>
    <h1>Страница об особенностях работы Laravel с базами данных</h1>
    <h2>Первоначальная настойка</h2>
    <p>Для начала у Вас должна быть развернута база данных</p>
    <p>Как правило при установке локального сервера встает и база данных</p>
    <p>Проверить доступ к примеру к MySQL можно при помощи phpMyAdmin</p>
    <h3>Настраиваем пересменных окржения windows к mysql.exe</h3>
    <p>Проверить можно в консоли дав команду <code>mysql -uroot -p</code></p>
    <p>где после -u задается логин админимтратора базы данных, а после -p выведется прндложение ввести пароль</p>
    <h3>Команды mysql</h3>
    <p><code>show databases;</code> - показывает имена баз данных на сервере</p>
    <p><code>create database hahaha;</code> - создает базу данных с именем hahaha</p>
    <h2>После того как предыдущие работы выполнены успешно перейдем к настройке нашего приложеня</h2>
    <p>Настройки подключения к базе данных находятся в файле <code>.env</code></p>
    <code>
        <pre>
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
        </pre>
    </code>
    <p>Для общего понимания эти настройки потом применяются в файле <code>config\database.php</code></p>
    <h2>Если все сделано корректно то при команде</h2>
    <p><code>php artisan migrate</code></p>
    <p>Будут созданы таблицы указанные в <code>database\migrations</code></p>
    <p>Синтаксис создания файлов миграций, значения типов данных и т.д. можно посмотреть в документации <a target="_blank" href="https://laravel.com/docs/7.x/migrations">Laravel</a></p>
<h3>Создание файла миграции</h3>
    <p>
        <code>
            php artisan make:migration create_posts_table --create="posts"
        </code>
    <hr>
        <p><code>create_posts_table</code> - название файла миграции в <code>database\migrations</code></p>
        <p><code>posts</code> - название таблицы в базе данных</p>
    </p>
    <br>
<p>
    <code>
        php artisan migrate:rollback
    </code> - откат последней миграции
</p>
    <p>Так же в файле миграции помимо названия столбцов и их типов данных можно указвать модификаторы полей (уникальный, не нулевой, нулевое или дефолтное значение поля, а так же связывание таблиц по полям и правила обновления/удаление записей)</p>
    <h3>Добавление столбца в действующую таблицу</h3>
    <p>
        <code>
            php artisan make:migration add_is_admin_to_posts_table --table="posts"
        </code> - добавление новой миграции (для таблицы posts)
    </p>
    <p><code>add_is_admin_to_posts_table</code> - название файла миграции</p>
    <p><code>posts</code> - в какую таблицу полезем</p>

    <h3>Далее в файле миграции пишем что делаем с таблицей, в данном примере мы добавляем новое поле is_admin</h3>
    <h5>Не забываем заполнять секцию <b>down</b></h5>
    <code>
        <pre>public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->tinyInteger('is_admin')->default(0);
        });
    }

public function down()

    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('is_admin');
        });
    }
        </pre>
    </code>
    <p>После этого даем опять команду</p>
    <p><code>php artisan migrate</code></p>

    <h2>Сброс всех миграций</h2>
    <p><code>php artisan migration:reset</code></p>

    <h2>Проверка статуса миграций</h2>
    <p>
        <code>
            php artisan migrate:status
        </code>
    </p>

    <p><a href="/db/sqlQueries">Прямые SQL запросы</a></p>
    <p><a href="/db/eloquent">Eloquent</a></p>
    <p><a href="/db/relationship">Отношения полей в базах данных</a></p>
</head>
<body>

</body>
</html>
