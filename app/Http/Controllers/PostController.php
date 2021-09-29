<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class PostController extends Controller
{
    //withでデータとることでデータ通信を早くする
    public function index() {
        $posts = Post::with('category')->latest()->get();
        $categories = Category::all();

        return view('posts.index')
          ->with([
              'posts' => $posts,
              'categories' => $categories,
          ]);
    }

    //implicit bindingでかく
    public function show(Post $post) {

        return view('posts.show')
          ->with(['post' => $post]);
    }
}
