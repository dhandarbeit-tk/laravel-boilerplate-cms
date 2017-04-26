<?php

namespace App\Http\Controllers;

use App\Eloquent\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function get_view($post_slug) {
        $post = Post::whereSlug($post_slug)->firstOrFail();

        return view('extensions.posts.pages.view.blade', compact('post'));
    }
}
