<?php

namespace App\Http\Controllers\db;

use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Role;
use App\Country;

class Relationship extends Controller
{
    public function main()
    {
        return view('db\relationship');
    }

    public function oneToOne($id)
    {

        $post = User::find($id)->post;

        return $post;
    }

    public function oneToOneInverse($id)
    {
        $user = Post::find($id)->user;

        return $user;
    }

    public function oneToMany($id)
    {

        $post = User::find($id)->posts;

        return $post;
    }

    public function oneToManyInverse($id)
    {

        $user = Post::find($id)->userOneToManyReverse;

        return $user;
    }

    public function manyToMany($id)
    {

        $users = Role::find($id)->user;

        return $users;

    }

    public function manyToMany2()
    {

        $roles = Role::find(1)->user;

        return $roles;
    }

    public function manyToMany3($id)
    {

        $user = User::find($id);

        return $user->roles;

    }

    public function manyToMany4($id)
    {

        $user = User::find($id);

        //return $user->roles[0]['pivot']['created_at'];

        foreach ($user->roles as $role) {
            return $role->pivot->created_at;
        }
    }

    public function hasManyThrough($id)
    {
        $country = Country::find($id);

        return $country->posts;
    }

    public function polymorphic($id)
    {
        $user = User::find($id);

        return $user->photos;
    }

    public function polymorphic1($id)
    {
        $post = Post::find($id);

        return $post->photos;
    }

    public function polymorphic2($id){

        $photo = Photo::findOrFail($id);

        return $photo->imageable;
    }

    public function polymorphic3($id){
        $post = Post::find($id);

return $post->tags;
    }

}
