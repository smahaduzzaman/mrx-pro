<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function getPosts($id)
    {
        $category = Category::findOrFail($id);
        $posts = Post::with('category')->get();

        return view('category_posts', compact('category', 'posts'));
    }

    public function getLatestPosts()
    {
        $categories = Category::all();
        return view('latest_posts', compact('categories'));
    }
}
