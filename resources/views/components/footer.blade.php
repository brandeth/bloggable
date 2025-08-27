<!-- resources/views/components/footer.blade.php -->
<footer class="bg-gray-900 dark:bg-gray-950 text-white py-12 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="flex items-center justify-center gap-2 mb-6">
            <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <span class="text-2xl font-bold">Bloggable</span>
        </div>
        <p class="text-gray-400 dark:text-gray-500 mb-6">
            Empowering writers to share their stories with the world.
        </p>
        <p class="text-gray-500 dark:text-gray-600 text-sm">
            © {{ date('Y') }} Bloggable. All rights reserved.
        </p>
    </div>
</footer>