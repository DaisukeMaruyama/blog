<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class PostController extends Controller
{

    public function index() {

        //filter()はmodel内にscopeで記載
        $posts = Post::with('category')->latest()->filter(request(['search']))->paginate(6);
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
