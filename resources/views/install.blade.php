<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tools</title>
</head>
<body>
    <h1>Для установки laravel требуется</h1>

    <h3>composer</h3>
    <h3>локальный сервер</h3>
    <p>XAMP</p>
    <p>OpenServer</p>
    <h3>база данных</h3>
    <p>MariaDB</p>
    <p>MySQL</p>
    <h3>npm</h3>
    <h3>Редактор кода либо среда разработки</h3>
        <p>VisualStudioCode</p>
        <p>PHPShtorm</p>
    <h3>Git</h3>
        <p>Git</p>

    <h2>Проверка что все поставили корректно</h2>
    <code>
        <pre>
            php -v
            composer -v
            git --version
            npm -v
        </pre>
    </code>

<h2>Порядок установки</h2>

<code>
    <pre>

        <h3>Глобальная установка</h3>
        composer global require laravel/installer
        <h3>Создаем проект</h3>
        composer create-project --prefer-dist laravel/laravel blog
        <h3>Запускаем сервер</h3>
        php artisan serve
    </pre>
</code>

</body>
</html>
