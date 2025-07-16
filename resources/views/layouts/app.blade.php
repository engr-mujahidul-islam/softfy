<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Marketplace') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="p-4 bg-white shadow">
        <div class="container mx-auto flex justify-between">
            <a href="/" class="font-bold text-xl">Software Market</a>
            <nav>
                <a href="/products" class="mr-4">Browse</a>
                @auth
                    <a href="{{ route('buyer.dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-6">
        @yield('content')
    </main>
</body>
</html>
