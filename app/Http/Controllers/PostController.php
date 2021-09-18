<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('posts.index')
          ->with(['posts' => $posts]);
    }

    //implicit bindingでかく
    public function show(Post $post) {

        return view('posts.show')
          ->with(['post' => $post]);
    }
}
