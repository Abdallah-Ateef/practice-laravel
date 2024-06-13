<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PostController extends Controller
{
    public function create(){
        return view('posts.create');

    }
}
