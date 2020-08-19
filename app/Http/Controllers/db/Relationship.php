<?php

namespace App\Http\Controllers\db;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Role;

class Relationship extends Controller
{
    public function main(){
        return view('db\relationship');
    }

    public function oneToOne($id){

        $post = User::find($id)->post;

        return $post;
    }

    public function oneToOneInverse($id){
        $user = Post::find($id)->user;

        return $user;
    }

    public function oneToMany($id){

        $post = User::find($id)->posts;

        return $post;
    }

    public function oneToManyInverse($id){

        $user = Post::find($id)->userOneToManyReverse;

        return $user;
    }
    public function manyToMany($id){

        $users = Role::find($id)->user;

        return $users;

    }

    public function manyToMany2(){

        $roles = Role::find(1)->user;

return $roles;
    }

}
