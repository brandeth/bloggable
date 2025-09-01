<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bloggable Blog')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-gray-50 dark:bg-gray-900 min-h-screen font-sans text-gray-900 dark:text-gray-100 flex flex-col">
    @include('components.navigation')
    <header class="bg-gradient-to-r from-blue-600 to-purple-600 py-10 mb-8">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-2">@yield('header-title', 'Bloggable')</h1>
            <p class="text-lg text-blue-100">@yield('header-desc', 'Inspiring stories and insights from our writers.')</p>
        </div>
    </header>
    <main class="max-w-5xl mx-auto px-4 flex flex-col md:flex-row gap-8 flex-1">
        <section class="flex-1 min-w-0 md:min-w-96">
            @yield('content')
        </section>
        <aside class="w-full md:w-80 shrink-0">
            @yield('sidebar')
        </aside>
    </main>
    @include('components.footer')
</body>

</html>