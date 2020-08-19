<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
</head>
<body>
<h1>Результат обновления записи в базе данных</h1>

<h2>code</h2>

<code>
    <pre>
        $request = DB::update('update posts title = "updated title" where id = ?', [1]);
        return view('db/rawSQLQueryies/update', compact('request'));
    </pre>
</code>

<h2>результат</h2>

{{$request}}

</body>
</html>
