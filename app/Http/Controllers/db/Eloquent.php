<?php

namespace App\Http\Controllers\db;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;
use App\Post;

class Eloquent extends Controller
{
    public function show(){
        return view ('db/eloquent');
    }

    /**
     * метод демонстрирующий вывод всех сообщений из базы данных
     * @return mixed
     */
    public function postsShow(){

        $posts = Post::all();

        $exportRecords = '';

        foreach ($posts as $post){
            $exportRecords = $exportRecords . $post->title . ' ; ';
        }

        return $exportRecords;
    }

    public function postFind(){

        $post = Post::find(1);

        return $post->title;
}

public function postFind2(){

        $posts = Post::where('title', 'первая запись')->orderBy('id', 'desc')->get();

        return $posts;
}

public function postFind3(){

        $post = Post::findOrFail(1);

        return $post;
}

public function postFind4(){

        $post = Post::where('id', '>', 2)->firstOrFail();

        return $post;
}

public function postInsert(){
        $post = new Post;

        $post->title = 'Дабавленная новая запись';
        $post->post = 'Тескт добавленной новой записи';

        $post->save();
}

public function postChange(){
        $post = Post::find(2);

        $post->title = 'Поменяли запись';
        $post->post = 'Поменяли текст поста';

        $post->save();
}

public function postInsert2(){
        $post = Post::create(['title'=>'Новая запись добавленная массивом', 'post'=>'Текст записи добавленной массивом']);

        return $post;
}

public function postChange2(){
        $post = Post::where('id', 3)->where('is_admin',0)->update(['title'=>'Обновили вторым способом','post'=>'Тест записи обновленной вторым способом']);

    return $post;
}

public function postDelete(){

        $post = Post::find(1);
        $post->delete();

        return $post;
}

public function postDelete2(){
        $post = Post::where('id', 2)->delete();

        return $post;
}

public function postDelete3(){
        $post = Post::destroy(3);

        return $post;
}

public function softDelete(){

        $post = Post::find(1)->delete();

        return $post;
}

public function softDeleteShow(){
        $post = Post::find(1);

        return $post;
}

public function softDeleteShow2(){
        $post = Post::withTrashed()->where('id', 1)->get();

        return $post;
}

public function softDeleteShow3(){
        $post = Post::onlyTrashed()->where('is_admin', 0)->get();

        return $post;
}

public function softDeleteRestore(){
        $post = Post::withTrashed()->where('id', 1)->restore();

        return $post;
}

public function softDeleteForceDelete(){
        $post = Post::onlyTrashed()->where('id',2)->forceDelete();

        return $post;
}

}
