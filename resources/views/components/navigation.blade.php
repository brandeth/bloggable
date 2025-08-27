<!-- resources/views/components/navigation.blade.php -->
<nav class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md shadow-sm border-b border-gray-100 dark:border-gray-700 sticky top-0 z-50 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center gap-2">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="text-xl sm:text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        Bloggable
                    </span>
                </a>
            </div>
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-6">
                <a href="{{ route('about') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors font-medium {{ request()->routeIs('about') ? 'text-blue-600 dark:text-blue-400' : '' }}">About</a>
                <a href="{{ route('contact') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors font-medium {{ request()->routeIs('contact') ? 'text-blue-600 dark:text-blue-400' : '' }}">Contact</a>
                
                <!-- Dark Mode Toggle -->
                <button id="dark-mode-toggle" class="p-2 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                    <!-- Sun Icon (Light Mode) -->
                    <svg id="sun-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <!-- Moon Icon (Dark Mode) -->
                    <svg id="moon-icon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>
                
                <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-full hover:shadow-lg transition-all duration-300 font-medium">
                    Start Writing
                </button>
            </div>
            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center gap-2">
                <!-- Mobile Dark Mode Toggle -->
                <button id="mobile-dark-mode-toggle" class="p-2 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                    <!-- Sun Icon (Light Mode) -->
                    <svg id="mobile-sun-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <!-- Moon Icon (Dark Mode) -->
                    <svg id="mobile-moon-icon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>
                
                <button id="mobile-menu-button" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <div class="flex flex-col gap-4">
                <a href="{{ route('about') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors font-medium py-2 {{ request()->routeIs('about') ? 'text-blue-600 dark:text-blue-400' : '' }}">About</a>
                <a href="{{ route('contact') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors font-medium py-2 {{ request()->routeIs('contact') ? 'text-blue-600 dark:text-blue-400' : '' }}">Contact</a>
                <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-full hover:shadow-lg transition-all duration-300 font-medium text-center">
                    Start Writing
                </button>
            </div>
        </div>
    </div>
</nav>
<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Dark mode functionality
    function initDarkMode() {
        // Check for saved dark mode preference or default to light mode
        const isDark = localStorage.getItem('darkMode') === 'true' || 
                      (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches);
        
        if (isDark) {
            document.documentElement.classList.add('dark');
            updateDarkModeIcons(true);
        }
    }

    function toggleDarkMode() {
        const isDark = document.documentElement.classList.toggle('dark');
        localStorage.setItem('darkMode', isDark);
        updateDarkModeIcons(isDark);
    }

    function updateDarkModeIcons(isDark) {
        // Desktop icons
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');
        
        // Mobile icons
        const mobileSunIcon = document.getElementById('mobile-sun-icon');
        const mobileMoonIcon = document.getElementById('mobile-moon-icon');

        if (isDark) {
            sunIcon?.classList.add('hidden');
            moonIcon?.classList.remove('hidden');
            mobileSunIcon?.classList.add('hidden');
            mobileMoonIcon?.classList.remove('hidden');
        } else {
            sunIcon?.classList.remove('hidden');
            moonIcon?.classList.add('hidden');
            mobileSunIcon?.classList.remove('hidden');
            mobileMoonIcon?.classList.add('hidden');
        }
    }

    // Initialize dark mode on page load
    document.addEventListener('DOMContentLoaded', function() {
        initDarkMode();

        // Desktop dark mode toggle
        document.getElementById('dark-mode-toggle')?.addEventListener('click', toggleDarkMode);
        
        // Mobile dark mode toggle
        document.getElementById('mobile-dark-mode-toggle')?.addEventListener('click', toggleDarkMode);
    });
</script>