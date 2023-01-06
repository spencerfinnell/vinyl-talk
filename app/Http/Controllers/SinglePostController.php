<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    public function post() {
        return view('single-post');
    }
}
