<?php

namespace App\Http\Controllers;

use Illuminat\Http\Request;

class PostController extends Controller
{
    //
    public function create() {
        return view('post.create');
    }
}
