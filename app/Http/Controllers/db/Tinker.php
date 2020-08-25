<?php

namespace App\Http\Controllers\db;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Tinker extends Controller
{
    public function main(){
        return view('db\tinker');
    }
}
