<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Tinker</title>
</head>
<body>
<div class="container"><h1>Tinker</h1>

    <p>Tinker - это возможность с помощью artisan в командной строке работать с данными баз данных</p>

    <p>Входим в редактор tinker</p>

    <blockquote>
        <code>
            php artisan tinker
        </code>
    </blockquote>

    <p>Команда добавления записи в таблицу контролируемую моделью App\User</p>

    <blockquote>
        <code>
            $user = App\User::create(['name'=>'Ваня', 'email'=>'test1', 'password'=>'testpassword', 'country_id'=>3]);
        </code>
    </blockquote>

    <p>Второй способ добавить запись, через создание нового объекта</p>

    <blockquote>
            <pre>
                <code>
                    $user = new App\User
                    $user->name = 'Betmen'
                    $user->email = 'Почта Бетмена'
                    $user->password = '123321'
                    $user->country_id = 4
                </code>
                посмотреть что получилось
                <code>
                    $user
                </code>
                Записать в базу данных
                <code>
                    $user->save()
                </code>
            </pre>
    </blockquote>


</div>

</body>
</html>
