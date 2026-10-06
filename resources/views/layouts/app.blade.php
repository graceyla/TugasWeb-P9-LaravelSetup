<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') - {{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">

    <nav class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 py-4 flex flex-wrap items-center justify-between gap-3">
            <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600">TR9 Laravel</a>
            <div class="flex gap-5 text-sm font-medium">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-indigo-600' : 'text-slate-600 hover:text-indigo-600' }}">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-indigo-600' : 'text-slate-600 hover:text-indigo-600' }}">About</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-indigo-600' : 'text-slate-600 hover:text-indigo-600' }}">Contact</a>
            </div>
        </div>
    </nav>

    <main class="flex-1 max-w-5xl w-full mx-auto px-4 py-10">
        @yield('content')
    </main>

    <footer class="text-center text-sm text-slate-400 py-6">
        Tugas Rutin 9 - Setup Laravel &copy; {{ date('Y') }}
    </footer>

</body>
</html>
