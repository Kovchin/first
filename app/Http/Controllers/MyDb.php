<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyDb extends Controller
{
    public function init(){
        return view('db\db');
    }

    public function sqlQueries(){
        return view('db/rawSQLQueries');
    }

    public function insert(){
        $request = DB::insert('insert into posts(title, post) values(?,?)', ['PHP with Laravel', 'PHP laravel it the best that has happened to PHP']);
        return view('db/rawSQLQueries/insert',compact('request'));
    }

    public function reading(){
        $request = DB::select('select * from posts');
        return view('db/rawSQLQueries/reading', compact('request'));
    }

    public function update(){
        $request = DB::update('update posts set title = "updated title" where id = ?', [3]);
        return view('db/rawSQLQueries/update', compact('request'));
    }

    public function delete(){
        $request = DB::delete('delete from posts where id = ?', [2]);
        return view('db/rawSQLQueries/delete', compact('request'));
    }

}
