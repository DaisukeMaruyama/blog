<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class PostController extends Controller
{

    public function index() {

        $categories = Category::all();

        return view('posts.index')
          ->with([
              'posts' => $this->getPosts(),
              'categories' => $categories,
          ]);
    }

    //implicit bindingでかく
    public function show(Post $post) {

        return view('posts.show')
          ->with(['post' => $post]);
    }

    //getPostで検索メソッドを定義。post/indexアクション内で呼び出している
    protected function getPosts() {

        //withでデータとることでデータ通信を早くする
        $posts = Post::with('category')->latest()->get();

        if (request('search')) {
            $posts
            = Post::where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%')
            ->get();
        }

        return $posts;
    }
}
