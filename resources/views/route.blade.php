<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Route</title>
</head>
<body>
    <h1>Настройка маршрутов в Laravel</h1>

<p>Маршруты laravel хранятся по адресу <i>routes\web.php</i> </p>
<h3>Пример</h3>

    <code>
        <pre>
            Route::get('/route', function () {
            return view('route');
            });
        </pre>
    </code>

<h3>Передача значаний в Route</h3>
    <code>
        <pre>
            Route::get('/test/{age}/{name}', function ($age,$name) {
            return 'Привет '. $name . ' тебе ' . $age . ' лет.';
            });
        </pre>
    </code>
<h3>Именованные пути</h3>
    <code>
        <pre>
            Route::get('/test/route', array('as' => 'nickname.array', function ()
            $url = route('nickname.array');
            return 'this is a url = '. $url;
            }));
        </pre>
    </code>
    <h4>Результат</h4>
<code>
    <pre>
        this is a url = http://127.0.0.1:8000/test/route
    </pre>
</code>
<h4>Проверка маршрутов</h4>
<code>
    <pre>
        <b>php artisan route:list</b>

        +--------+----------+------------+----------------+---------+------------+
        | Domain | Method   | URI        | Name           | Action  | Middleware |
        +--------+----------+------------+----------------+---------+------------+
        |        | GET|HEAD | /          |                | Closure | web        |
        |        | GET|HEAD | api/user   |                | Closure | api        |
        |        |          |            |                |         | auth:api   |
        |        | GET|HEAD | artisan    |                | Closure | web        |
        |        | GET|HEAD | install    |                | Closure | web        |
        |        | GET|HEAD | route      |                | Closure | web        |
        |        | GET|HEAD | test/route | nickname.array | Closure | web        |
        +--------+----------+------------+----------------+---------+------------+

    </pre>
</code>
</body>
</html>
