<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index()
    {
        $posts = Post::allPost();

//        dd($posts);
        return view('post',compact('posts'));
    }
}
