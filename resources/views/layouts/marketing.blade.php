<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-950 text-slate-100">
        <div class="mx-auto flex min-h-screen max-w-6xl flex-col px-6 py-10">
            <header class="flex items-center justify-between border-b border-white/10 pb-6">
                <div>
                    @yield('logo')
                </div>

                <nav class="flex gap-3 text-sm font-medium text-slate-300">
                    <a href="{{ route('dashboard') }}" class="rounded-full border border-white/10 px-4 py-2 transition hover:border-cyan-400 hover:text-cyan-300">Dashboard</a>
                    <a href="{{ route('brand.story') }}" class="rounded-full border border-white/10 px-4 py-2 transition hover:border-cyan-400 hover:text-cyan-300">Brand Story</a>
                    <a href="{{ route('launch.plan') }}" class="rounded-full border border-white/10 px-4 py-2 transition hover:border-cyan-400 hover:text-cyan-300">Launch Plan</a>
                </nav>
            </header>

            <main class="flex flex-1 items-center py-12">
                @yield('content')
            </main>
        </div>
    </body>
</html>
