<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function delete($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return redirect()->back()->with('success', 'Post deleted successfully.');
        }
        return redirect()->back()->with('error', 'Post not found.');
    }
}
