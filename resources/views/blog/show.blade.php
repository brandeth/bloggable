@extends('layouts.blog')

@section('title', $post->title)
@section('header-title', $post->title)
@section('header-desc')
<span class="text-blue-100">By {{ $post->author->name }} &middot; {{ $post->published_at->format('M d, Y') }}</span>
@endsection

@section('content')
    <article class="bg-white dark:bg-gray-800 rounded-xl shadow p-8">
    <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover rounded-lg mb-6">
        <div class="prose max-w-none dark:prose-invert">
            {!! $post->body !!}
        </div>
</article>
@endsection

@section('sidebar')
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 mb-8">
        <h3 class="text-lg font-semibold mb-4">About the Author</h3>
        <div class="flex items-center gap-4">
            <img src="{{ asset($post->author->avatar) }}" alt="{{ $post->author->name }}" class="w-12 h-12 rounded-full object-cover">
            <div>
                <div class="font-semibold">{{ $post->author->name }}</div>
                <div class="text-gray-500 dark:text-gray-300 text-sm">{{ $post->author->bio }}</div>
            </div>
        </div>
</div>
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6">
        <h3 class="text-lg font-semibold mb-4">More from Bloggable</h3>
        <ul class="space-y-2">
            @foreach($related as $relatedPost)
                <li>
                    <a href="{{ route('blog.show', $relatedPost->id) }}" class="text-blue-600 dark:text-blue-300 hover:underline">{{ $relatedPost->title }}</a>
                </li>
            @endforeach
        </ul>
</div>
@endsection