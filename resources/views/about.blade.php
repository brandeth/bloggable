@extends('layouts.app')

@section('title', 'About Us - Bloggable')

@section('content')
<main class="flex-1">
    <!-- Hero Section -->
    <section class="py-20 lg:py-32 bg-gradient-to-br from-blue-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 transition-colors duration-300">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6 transition-colors duration-300">
                About <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Bloggable</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 leading-relaxed transition-colors duration-300">
                We believe everyone has a story worth sharing. Our mission is to provide the perfect platform for writers, creators, and thought leaders to express themselves and connect with their audience.
            </p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-20 bg-white dark:bg-gray-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-6 transition-colors duration-300">Our Story</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6 leading-relaxed transition-colors duration-300">
                        Founded in 2025, Bloggable was born from the simple belief that great ideas shouldn't be limited by technical barriers. We started as a small team of writers and developers who were frustrated with complex publishing platforms that got in the way of creativity.
                    </p>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6 leading-relaxed transition-colors duration-300">
                        Today, we've grown into a community of thousands of writers who trust us to help them share their unique perspectives with the world. From personal journals to professional insights, from creative fiction to industry expertise – we've seen it all, and we're honored to be part of each story.
                    </p>
                    <div class="flex gap-6 text-center">
                        <div>
                            <div class="text-3xl font-bold text-blue-600">10K+</div>
                            <div class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Active Writers</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-purple-600">50K+</div>
                            <div class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Stories Published</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-green-600">1M+</div>
                            <div class="text-gray-600 dark:text-gray-400 transition-colors duration-300">Monthly Readers</div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-blue-100 to-purple-100 dark:from-blue-900/20 dark:to-purple-900/20 rounded-2xl p-8 transition-colors duration-300">
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg transition-colors duration-300">
                        <svg class="w-16 h-16 text-blue-600 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Our Mission</h3>
                        <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">
                            To democratize publishing and give every writer the opportunity to share their unique perspective with the world, regardless of their technical background or resources.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Our Values</h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 transition-colors duration-300">The principles that guide everything we do</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Authenticity</h3>
                    <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">We believe in the power of genuine, authentic storytelling. Every voice matters, and every story deserves to be heard.</p>
                </div>
                <div class="text-center p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Simplicity</h3>
                    <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">Technology should enhance creativity, not hinder it. We focus on intuitive, simple tools that get out of your way.</p>
                </div>
                <div class="text-center p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Community</h3>
                    <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">Great writing thrives in supportive communities. We foster connections between writers and readers worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-white dark:bg-gray-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Meet Our Team</h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 transition-colors duration-300">The passionate people behind Bloggable</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 transition-colors duration-300">Sarah Chen</h3>
                    <p class="text-blue-600 font-semibold mb-4">Founder & CEO</p>
                    <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">Former journalist turned entrepreneur, passionate about democratizing publishing and empowering writers worldwide.</p>
                </div>
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 transition-colors duration-300">Marcus Rodriguez</h3>
                    <p class="text-purple-600 font-semibold mb-4">Head of Product</p>
                    <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">UX designer and developer with 10+ years of experience creating intuitive, user-centered digital experiences.</p>
                </div>
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-green-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 transition-colors duration-300">Emma Thompson</h3>
                    <p class="text-green-600 font-semibold mb-4">Community Manager</p>
                    <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">Writer and community builder focused on fostering meaningful connections between creators and their audiences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-6">Our Vision for the Future</h2>
            <p class="text-xl leading-relaxed mb-8">
                We envision a world where great ideas and stories can reach their intended audience, regardless of the writer's background, resources, or technical expertise. Where creativity flows freely, connections are made naturally, and every voice has the potential to inspire, educate, or entertain.
            </p>
            <div class="grid md:grid-cols-2 gap-8 text-left">
                <div class="bg-white/10 dark:bg-black/20 rounded-xl p-6 transition-colors duration-300">
                    <h3 class="text-xl font-semibold mb-3">Innovation</h3>
                    <p class="text-blue-100 dark:text-blue-200 transition-colors duration-300">Continuously improving our platform with cutting-edge features that enhance the writing and reading experience.</p>
                </div>
                <div class="bg-white/10 dark:bg-black/20 rounded-xl p-6 transition-colors duration-300">
                    <h3 class="text-xl font-semibold mb-3">Global Reach</h3>
                    <p class="text-blue-100 dark:text-blue-200 transition-colors duration-300">Breaking down barriers and connecting writers and readers across cultures, languages, and continents.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
