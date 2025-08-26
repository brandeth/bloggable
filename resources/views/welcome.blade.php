@extends('layouts.app')

@section('title', 'Bloggable - Share Your Story')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-5xl lg:text-7xl font-bold text-gray-900 mb-6">
                Share Your <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Story</span>
                with the World
            </h1>
            <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                Turn your thoughts into powerful stories. Join thousands of writers who trust Bloggable to share their ideas, build their audience, and make an impact.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    Start Your Blog Today
                </button>
                <button class="border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-full text-lg font-semibold hover:border-gray-400 transition-colors">
                    Read Featured Stories
                </button>
            </div>
        </div>
    </div>
    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-blue-100 rounded-full opacity-60 animate-pulse"></div>
    <div class="absolute top-40 right-16 w-16 h-16 bg-purple-100 rounded-full opacity-60 animate-pulse" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-32 left-20 w-12 h-12 bg-pink-100 rounded-full opacity-60 animate-pulse" style="animation-delay: 2s;"></div>
</section>
<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Bloggable?</h2>
            <p class="text-xl text-gray-600">Everything you need to create, share, and grow your blog</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-blue-50 to-blue-100 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Easy Writing</h3>
                <p class="text-gray-600">Focus on your content with our intuitive editor. No technical skills required.</p>
            </div>
            <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-purple-50 to-purple-100 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Grow Your Audience</h3>
                <p class="text-gray-600">Connect with readers and build a community around your content.</p>
            </div>
            <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-green-50 to-green-100 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Track Your Success</h3>
                <p class="text-gray-600">Monitor your blog's performance with detailed analytics and insights.</p>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->
<section id="about" class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">About Bloggable</h2>
        <p class="text-xl text-gray-600 leading-relaxed mb-8">
            We believe everyone has a story worth sharing. Bloggable provides the perfect platform for writers, thought leaders, and creators to express themselves and reach their audience. Whether you're sharing personal experiences, professional insights, or creative fiction, we give you the tools to make your voice heard.
        </p>
        <div class="grid md:grid-cols-2 gap-8 text-left">
            <div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Our Mission</h3>
                <p class="text-gray-600">To democratize publishing and give every writer the opportunity to share their unique perspective with the world.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Our Vision</h3>
                <p class="text-gray-600">A world where great ideas and stories can reach their intended audience, regardless of the writer's background or resources.</p>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<section id="contact" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">Get in Touch</h2>
        <p class="text-xl text-gray-600 mb-12">
            Have questions, feedback, or need support? We'd love to hear from you.
        </p>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-6 rounded-xl bg-gradient-to-br from-blue-50 to-blue-100">
                <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Email Us</h3>
                <a href="mailto:hello@bloggable.com" class="text-blue-600 hover:text-blue-700 transition-colors">hello@bloggable.com</a>
            </div>
            <div class="p-6 rounded-xl bg-gradient-to-br from-purple-50 to-purple-100">
                <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Follow Us</h3>
                <a href="https://twitter.com/bloggable" target="_blank" class="text-purple-600 hover:text-purple-700 transition-colors">@bloggable</a>
            </div>
            <div class="p-6 rounded-xl bg-gradient-to-br from-green-50 to-green-100">
                <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Help Center</h3>
                <a href="#" class="text-green-600 hover:text-green-700 transition-colors">Get Support</a>
            </div>
        </div>
    </div>
</section>
@endsection