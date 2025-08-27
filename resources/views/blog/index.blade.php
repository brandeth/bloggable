@extends('layouts.blog')

@section('title', 'Bloggable Blog')
@section('header-title', 'Bloggable Blog')
@section('header-desc', 'Latest posts, tips, and stories from our community.')

@section('content')
<div class="space-y-8">
    @foreach($posts as $post)
            <article class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 flex flex-col md:flex-row gap-6">
        <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="w-full md:w-48 h-40 object-cover rounded-lg">
        <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold mb-2">
                        <a href="{{ route('blog.show', $post->id) }}" class="text-blue-700 dark:text-blue-300 hover:underline">{{ $post->title }}</a>
                    </h2>
                    <p class="text-gray-600 dark:text-gray-200 mb-4 line-clamp-3">{{ $post->excerpt }}</p>
                    <div class="text-sm text-gray-400 dark:text-gray-300">By {{ $post->author->name }} &middot; {{ $post->published_at->format('M d, Y') }}</div>
        </div>
    </article>
    @endforeach
</div>
@endsection

@section('sidebar')
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 mb-8">
    <h3 class="text-lg font-semibold mb-4">About Bloggable</h3>
    <p class="text-gray-600 dark:text-gray-200">A platform for writers to share their stories and connect with readers worldwide.</p>
</div>
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6">
        <h3 class="text-lg font-semibold mb-4">Categories</h3>
        <ul class="space-y-2">
            @foreach($categories as $category)
                <li>
                    <a href="#" class="text-blue-600 dark:text-blue-300 hover:underline">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
</div>
@endsection