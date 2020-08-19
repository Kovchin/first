<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SQLQueries</title>

    <style>
        h2{
            color: #00008b;
        }
    </style>

</head>
<body>
<h1>Прямые SQL запросы</h1>
<p>Примеры простых прямых запросов в базу данных</p>

    <h2>insert</h2>

<h3>code</h3>

<code>
    <pre>
        $request = DB::insert('insert into posts(title, post) values(?,?)', ['PHP with Laravel', 'PHP laravel it the best that has happened to PHP']);
        return view('db\rawSQLQueries\insert',compact('request'));
    </pre>
</code>

<h3>Результат</h3>

1

    <h2>reading</h2>
<h3>Code</h3>
    <code>
        <pre>
            $request = DB::select('select * from posts');
            return view('db/rawSQLQueries/reading', compact('request'));
        </pre>
    </code>
<h3>Результат</h3>
если вывести в View
<code>
    <pre>
        { { var_Dump($request) } }
    </pre>
</code>
<p>То увидим всю таблицу posts</p>
    <h2>updating</h2>
<h3>code</h3>

<code>
    <pre>
    $request = DB::update('update posts set title = "updated title" where id = ?', [1]);
    return view('db/rawSQLQueries/update', compact('request'));
    </pre>
</code>

<h3>Результат</h3>

1
    <h2>deleting</h2>

<h3>code</h3>

<code>
    <pre>

    $request = DB::delete('delete from posts where id = ?', [1]);
    return view('db/rawSQLQueries/delete', compact('request'));

    </pre>
</code>

<h3>Результат</h3>

1

</body>
</html>
