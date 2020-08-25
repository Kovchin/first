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

    <title>Bootstrap</title>
</head>
<body>
<div class="container">
    <h1>Bootstrap</h1>

    <p>Страница посвященная bootstrap в Laravel</p>

    <p>Ссылки</p>

    <hr>
    <p><a href="https://bootstrap-4.ru/docs/5.0/getting-started/introduction/" target="_blank">Русский язык bootstrap 5</a></p>
    <p><a href="https://bootstrap-4.ru/docs/4.5/getting-started/introduction/">Русская документация</a></p>
    <p><a href="https://getbootstrap.com/" target="_blank">Оригинальная страница</a></p>
    <hr>

    <div class="card bg-primary">
        <div class="card-header">
            командная строка
        </div>
        <div class="card-body">
            <p>composer require laravel/ui</p>
            <p>php artisan ui bootstrap</p>

            <p>[php artisan ui bootstrap --auth]</p>

            <p>npm install</p>
            <p>npm run dev</p>
        </div>
    </div>

    <div class="card bg-dark text-white">
        <div class="card-header">
            Добавить тест в тело blade
        </div>
        <div class="card-body">
            &lt;!-- Scripts --&gt;
            <br>
            &lt;script src="{{ asset('js/app.js') }}" defer&gt;&lt;/script&gt;
            <br>
            &lt;!-- Styles --&gt;
            <br>
            &lt;link href="{{ asset('css/app.css') }}" rel="stylesheet"&gt;
        </div>
    </div>
</div>

</body>
</html>
