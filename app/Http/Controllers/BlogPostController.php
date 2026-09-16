<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::where('is_published', true)->latest()->paginate(9);
        return view('pages.blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)->where('is_published', true)->firstOrFail();
        
        $relatedPosts = BlogPost::where('is_published', true)
                                ->where('id', '!=', $post->id)
                                ->inRandomOrder()
                                ->take(3)
                                ->get();
                                
        return view('pages.blog.show', compact('post', 'relatedPosts'));
    }
}
