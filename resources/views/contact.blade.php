@extends('layouts.app')

@section('title', 'Contact Us - Bloggable')

@section('content')
<main class="flex-1">
    <!-- Hero Section -->
    <section class="py-20 lg:py-32 bg-gradient-to-br from-blue-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 transition-colors duration-300">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6 transition-colors duration-300">
                Get in <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Touch</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 leading-relaxed transition-colors duration-300">
                Have questions, feedback, or need support? We'd love to hear from you. Our team is here to help you make the most of your blogging journey.
            </p>
        </div>
    </section>

    <!-- Contact Options Section -->
    <section class="py-20 bg-white dark:bg-gray-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <div class="text-center p-8 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 rounded-2xl hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Email Support</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 transition-colors duration-300">Get personalized help from our support team. We typically respond within 24 hours.</p>
                    <a href="mailto:support@bloggable.com" class="text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 transition-colors font-semibold">
                        support@bloggable.com
                    </a>
                </div>
                <div class="text-center p-8 bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 rounded-2xl hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Social Media</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 transition-colors duration-300">Follow us for updates, tips, and featured stories from our community.</p>
                    <a href="https://twitter.com/bloggable" target="_blank" class="text-purple-600 dark:text-purple-400 hover:text-purple-700 dark:hover:text-purple-300 transition-colors font-semibold">
                        @bloggable
                    </a>
                </div>
                <div class="text-center p-8 bg-gradient-to-br from-green-50 to-green-100 dark:from-green-900/20 dark:to-green-800/20 rounded-2xl hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Help Center</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 transition-colors duration-300">Browse our comprehensive knowledge base for quick answers to common questions.</p>
                    <a href="#" class="text-green-600 dark:text-green-400 hover:text-green-700 dark:hover:text-green-300 transition-colors font-semibold">
                        Visit Help Center
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-20 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Send Us a Message</h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 transition-colors duration-300">Fill out the form below and we'll get back to you as soon as possible.</p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 lg:p-12 transition-colors duration-300">
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 transition-colors duration-300">First Name *</label>
                            <input type="text" id="first_name" name="first_name" required class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-lg focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 dark:focus:border-blue-400 hover:border-gray-300 dark:hover:border-gray-500 transition-all duration-300 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 transition-colors duration-300">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" required class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-lg focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 dark:focus:border-blue-400 hover:border-gray-300 dark:hover:border-gray-500 transition-all duration-300 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 transition-colors duration-300">Email Address *</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-lg focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 dark:focus:border-blue-400 hover:border-gray-300 dark:hover:border-gray-500 transition-all duration-300 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 transition-colors duration-300">Subject *</label>
                        <select id="subject" name="subject" required class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-lg focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 dark:focus:border-blue-400 hover:border-gray-300 dark:hover:border-gray-500 transition-all duration-300 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="support">Technical Support</option>
                            <option value="billing">Billing Question</option>
                            <option value="feature">Feature Request</option>
                            <option value="partnership">Partnership Opportunity</option>
                            <option value="press">Press Inquiry</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2 transition-colors duration-300">Message *</label>
                        <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-lg focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 dark:focus:border-blue-400 hover:border-gray-300 dark:hover:border-gray-500 transition-all duration-300 bg-white dark:bg-gray-700 text-gray-900 dark:text-white resize-vertical" placeholder="Tell us how we can help you..."></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white dark:bg-gray-800 transition-colors duration-300">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 transition-colors duration-300">Quick answers to common questions about Bloggable</p>
            </div>
            <div class="space-y-6">
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 transition-colors duration-300">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 transition-colors duration-300">How do I get started with Bloggable?</h3>
                    <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">Simply click the "Start Writing" button, create your account, and you'll be guided through setting up your first blog. Our intuitive editor makes it easy to start publishing immediately.</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 transition-colors duration-300">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 transition-colors duration-300">Is Bloggable free to use?</h3>
                    <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">Yes! We offer a generous free plan that includes all the essential features you need to start blogging. We also offer premium plans with advanced features for serious writers and businesses.</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 transition-colors duration-300">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 transition-colors duration-300">Can I import content from other platforms?</h3>
                    <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">Absolutely! We support importing from major blogging platforms including WordPress, Medium, Ghost, and more. Our migration tools make it easy to bring your existing content over.</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 transition-colors duration-300">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 transition-colors duration-300">Do you offer customer support?</h3>
                    <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">Yes, we provide comprehensive support through email, our help center, and community forums. Premium users also get access to priority support and live chat.</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 transition-colors duration-300">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 transition-colors duration-300">Can I use my own domain name?</h3>
                    <p class="text-gray-600 dark:text-gray-300 transition-colors duration-300">Yes! With our premium plans, you can connect your own custom domain. We'll help you set it up and provide SSL certificates for security.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Hours Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-6">Our Office Hours</h2>
            <p class="text-xl mb-8">Our support team is available during these hours to provide immediate assistance:</p>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white/10 dark:bg-black/20 rounded-xl p-6 transition-colors duration-300">
                    <h3 class="text-2xl font-bold mb-4">Email Support</h3>
                    <p class="text-blue-100 dark:text-blue-200 mb-2 transition-colors duration-300">Monday - Friday: 9:00 AM - 6:00 PM PST</p>
                    <p class="text-blue-100 dark:text-blue-200 transition-colors duration-300">Weekend: 10:00 AM - 4:00 PM PST</p>
                </div>
                <div class="bg-white/10 dark:bg-black/20 rounded-xl p-6 transition-colors duration-300">
                    <h3 class="text-2xl font-bold mb-4">Live Chat (Premium)</h3>
                    <p class="text-blue-100 dark:text-blue-200 mb-2 transition-colors duration-300">Monday - Friday: 8:00 AM - 8:00 PM PST</p>
                    <p class="text-blue-100 dark:text-blue-200 transition-colors duration-300">Weekend: Emergency support only</p>
                </div>
            </div>
            <div class="mt-8 text-center">
                <p class="text-blue-100 dark:text-blue-200 transition-colors duration-300">All times are Pacific Standard Time (PST). We aim to respond to all inquiries within 24 hours.</p>
            </div>
        </div>
    </section>
</main>
@endsection
