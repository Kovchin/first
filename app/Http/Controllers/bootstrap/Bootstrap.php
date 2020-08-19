<?php

namespace App\Http\Controllers\bootstrap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Bootstrap extends Controller
{
    //
    public function main(){
        return view('bootstrap\bootstrap');
    }
}
