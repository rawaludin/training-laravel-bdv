<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('blogs.index', compact('posts'));
    }
}
