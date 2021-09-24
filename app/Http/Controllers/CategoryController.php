<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{

    public function show($slug)
    {
        $categories = Category::where('slug', $slug)->get();

        return view('categories.show')
          ->with(['categories' => $categories]);
    }

}
