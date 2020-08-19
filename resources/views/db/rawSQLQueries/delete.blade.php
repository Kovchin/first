<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
</head>
<body>
<h1>Результат удаления записи из базы данных</h1>

<h2>code</h2>

<code>
    <pre>

    $request = DB::delete('delete from posts where id = ?', [1]);
    return view('db/rawSQLQueries/delete', compact('request'));

    </pre>
</code>

<h2>Результат</h2>

{{$request}}

</body>
</html>
