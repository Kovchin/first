<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        td{
            border: 1px solid black;
        }
    </style>

    <title>Document</title>
</head>
<body>

<h1>Результат вывода запроса</h1>

<cpde>
    <pre>
        <table>
@foreach($request as $record)
<tr>
    <td>
        id = {{$record->id}}
    </td>
    <td>
        title = {{$record->title}}
    </td>
    <td>
        post = {{$record->post}}
    </td>
</tr>


            @endforeach
        </table>
    </pre>
</cpde>

</body>
</html>
