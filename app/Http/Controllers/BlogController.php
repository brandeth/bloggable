<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Example data, replace with Eloquent queries
        $posts = collect([
            (object)[
                'id' => 1,
                'title' => 'Welcome to Bloggable',
                'excerpt' => 'This is the first post on Bloggable! Discover how to share your story.',
                'image' => 'images/blog1.png',
                'author' => (object)['name' => 'Admin'],
                'published_at' => now(),
            ],
        ]);
        $categories = collect([
            (object)['id' => 1, 'name' => 'General'],
        ]);
        return view('blog.index', compact('posts', 'categories'));
    }

    public function show($id)
    {
        // Example data, replace with Eloquent queries
        $post = (object)[
            'id' => $id,
            'title' => 'Welcome to Bloggable',
            'body' => '<p>This is the full content of the first post.</p>',
            'image' => 'images/blog1.png',
            'author' => (object)[
                'name' => 'Admin',
                'avatar' => 'images/avatar04.png',
                'bio' => 'Site administrator',
            ],
            'published_at' => now(),
        ];
        $related = collect([
            (object)[
                'id' => 2,
                'title' => 'Another Post',
                'excerpt' => 'A brief description of another interesting post on our blog.'
            ],
        ]);
        return view('blog.show', compact('post', 'related'));
    }
}
