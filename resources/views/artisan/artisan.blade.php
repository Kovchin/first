<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>artisan</title>
</head>
<body>
    <h1>artisan это программа что выполняет команды для laravel</h1>
    <hr>
    <p>Команды даются в <b>консоли</b> при настроенном php окружении</p>

    <h2>Usage:</h2>
    <hr>
    <code>    command [options] [arguments]</code>

    <h2>Options:</h2>
    <hr>
    <p><b>-h, --help</b>            Display this help message</p>
    <p><b>-q, --quiet</b>           Do not output any message</p>
    <p><b>-V, --version</b>         Display this application version</p>
    <ul>
        <li><b>--ansi</b>            Force ANSI output</li>
        <li><b>--no-ansi</b>         Disable ANSI output</li>
    </ul>
    <p>
        <b>-n, --no-interaction</b>  Do not ask any interactive question</p>
    <ul>
        <li><b>--env[=ENV]</b>       The environment the command should run under</li>
    </ul>

    <p><b>-v|vv|vvv, --verbose</b>  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</p>

    <h2>Available commands:</h2>
    <hr>

    <p><b>clear-compiled</b>       Remove the compiled class filep </p>
    <p><b>down</b>                 Put the application into maintenance mode </p>
    <p><b>env</b>                  Display the current framework environment </p>
    <p><b>help</b>                 Displays help for a command </p>
    <p><b>inspire</b>              Display an inspiring quote </p>
    <p><b>list</b>                 Lists commands </p>
    <p><b>migrate</b>              Run the database migrations </p>
    <p><b>optimize</b>             Cache the framework bootstrap files </p>
    <p><b>serve</b>                Serve the application on the PHP development server </p>
    <p><b>test</b>                 Run the application tests </p>
    <p><b>tinker</b>               Interact with your application </p>
    <p><b>up</b>                   Bring the application out of maintenance mode</p>

    <h2>auth</h2>
    <hr>
<p><b>auth:clear-resets</b>    Flush expired password reset tokens</p>

    <h2>cache</h2>
    <hr>
    <p><b>cache:clear</b>          Flush the application cache</p>
    <p><b>cache:forget</b>         Remove an item from the cache</p>
    <p><b>cache:table</b>          Create a migration for the cache database table</p>

    <h2>config</h2>
    <hr>
    <p><b>config:cache</b>         Create a cache file for faster configuration loading</p>
    <p><b>config:clear</b>         Remove the configuration cache file</p>
    <h2>db</h2>
    <hr>
    <p><b>db:seed</b>              Seed the database with records</p>
    <p><b>db:wipe</b>              Drop all tables, views, and types</p>

    <h2>event</h2>
    <hr>
    <p><b>event:cache</b> Discover and cache the application's events and listeners</p>
    <p><b>event:clear</b> Clear all cached events and listeners</p>
    <p><b>event:generate</b> Generate the missing events and listeners based on registration</p>
    <p><b>event:list</b> List the application's events and listeners</p>
    <h2>key</h2>
    <hr>
    key:generate         Set the application key
    <h2>make</h2>
    <hr>
    <p><b>make:cast</b> Create a new custom Eloquent cast class</p>
    <p><b>make:channel</b>         Create a new channel class</p>
    <p><b>make:command</b>         Create a new Artisan command</p>
    <p><b>make:component</b>       Create a new view component class</p>
    <p><b>make:controller</b>      Create a new controller class</p>
    <p><b>make:event</b>           Create a new event class</p>
    <p><b>make:exception</b>       Create a new custom exception class</p>
    <p><b>make:factory</b>         Create a new model factory</p>
    <p><b>make:job</b>             Create a new job class</p>
    <p><b>make:listener</b>        Create a new event listener class</p>
    <p><b>make:mail</b>            Create a new email class</p>
    <p><b>make:middleware</b>      Create a new middleware class</p>
    <p><b>make:migration</b>       Create a new migration file</p>
    <p><b>make:model</b>           Create a new Eloquent model class</p>
    <p><b>make:notification</b>    Create a new notification class</p>
    <p><b>make:observer</b>        Create a new observer class</p>
    <p><b>make:policy</b>          Create a new policy class</p>
    <p><b>make:provider</b>        Create a new service provider class</p>
    <p><b>make:request</b>         Create a new form request class</p>
    <p><b>make:resource</b>        Create a new resource</p>
    <p><b>make:rule</b>            Create a new validation rule</p>
    <p><b>make:seeder</b>          Create a new seeder class</p>
    <p><b>make:test</b>            Create a new test class</p>
    <h2>migrate</h2>
    <hr>
    <p><b>migrate:fresh</b>        Drop all tables and re-run all migrations</p>
    <p><b>migrate:install</b>      Create the migration repository</p>
    <p><b>migrate:refresh</b>      Reset and re-run all migrations</p>
    <p><b>migrate:reset</b>        Rollback all database migrations</p>
    <p><b>migrate:rollback</b>     Rollback the last database migration</p>
    <p><b>migrate:status</b> Show the status of each migration</p>
    <h2>notifications</h2>
    <hr>
    <p><b>notifications:table</b> Create a migration for the notifications table</p>
    <h2>optimize</h2>
    <hr>
    <p><b>optimize:clear</b> Remove the cached bootstrap files</p>
    <h2>package</h2>
    <hr>
    <p><b>package:discover</b> Rebuild the cached package manifest</p>
    <h2>queue</h2>
    <hr>
    <p><b>queue:failed</b>         List all of the failed queue jobs</p>
    <p><b>queue:failed-table</b>   Create a migration for the failed queue jobs database table</p>
    <p><b>queue:flush</b>          Flush all of the failed queue jobs</p>
    <p><b>queue:forget</b>         Delete a failed queue job</p>
    <p><b>queue:listen</b>         Listen to a given queue</p>
    <p><b>queue:restart</b>        Restart queue worker daemons after their current job</p>
    <p><b>queue:retry</b>          Retry a failed queue job</p>
    <p><b>queue:table</b>          Create a migration for the queue jobs database table</p>
    <p><b>queue:work</b>           Start processing jobs on the queue as a daemon</p>
    <h2>route</h2>
    <hr>
    <p><b>route:cache</b>          Create a route cache file for faster route registration</p>
    <p><b>route:clear</b>          Remove the route cache file</p>
    <p><b>route:list</b>           List all registered routes</p>
    <h2>schedule</h2>
    <hr>
    <p><b>schedule:run</b> Run the scheduled commands</p>
    <h2>session</h2>
    <hr>
    <p><b>session:table</b> Create a migration for the session database table</p>
    <h2>storage</h2>
    <hr>
    <p><b>storage:link</b> Create the symbolic links configured for the application</p>
    <h2>stub</h2>
    <hr>
    <p><b>stub:publish</b> Publish all stubs that are available for customization</p>
    <h2>vendor</h2>
    <hr>
    <p><b>vendor:publish</b> Publish any publishable assets from vendor packages</p>
    <h2>view</h2>
    <hr>
    <p><b>view:cache</b> Compile all of the application's Blade templates</p>
    <p><b>view:clear</b> Clear all compiled view files</p>
    <hr>
    <hr>



    <h3>Запуск сервера</h3>
<code>
    php artisan serve
</code>

<h3>Просмотр доступных маршрутов</h3>
<code>
    php artisan route:list
</code>
</body>
</html>
