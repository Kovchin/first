<h2>Запрос</h2>
<code>
    <pre>
        $request = DB::insert('insert into posts(title, post) values(?,?)', ['PHP with Laravel', 'PHP laravel it the best that has happened to PHP']);
        return view('db\rawSQLQueries\insert',compact('request'));
    </pre>
</code>
<h2>Результат</h2>
{{$request}}
