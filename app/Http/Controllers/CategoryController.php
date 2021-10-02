<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
class CategoryController extends Controller
{

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $categories = Category::all();
        $currentCategory = $category;

        $id = $category->id;
        $posts = Post::where('id', $id)->get();
        return view('categories.show')
          ->with([
              'category' => $category,
              'posts' => $posts,
              'categories' => $categories,
              'currentCategory' => $currentCategory,
              ]);
    }

}
