<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UrbanStyle</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-900">

<header class="bg-yellow-400">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <h1 class="text-2xl font-extrabold">
            Urban<span class="text-white">Style</span>
        </h1>

        <input
            id="searchInput"
            type="text"
            placeholder="Search products..."
            class="w-72 px-4 py-2 rounded-full text-sm outline-none"
        >

        <nav class="flex items-center gap-6 font-medium">
            <a href="/" class="hover:underline">Home</a>
            <a href="/products" class="hover:underline">Catalog</a>
            <span class="relative cursor-pointer">
                🛒
                <span class="absolute -top-2 -right-3 bg-red-500 text-white text-xs px-2 rounded-full">0</span>
            </span>
        </nav>
    </div>
</header>

<main class="max-w-7xl mx-auto px-6 py-10">
    @yield('content')
</main>

<footer class="bg-black text-white text-center py-6 mt-16 text-sm">
    © 2026 UrbanStyle — Streetwear Culture
</footer>

</body>
</html>
