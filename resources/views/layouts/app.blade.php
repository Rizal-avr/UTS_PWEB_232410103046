<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan Penjualan Sayuran</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-300 flex flex-col min-h-screen pt-16">
    @include('components.navbar')
    
    <main class="flex-grow container mx-auto px-4 py-6">
        @yield('content')
    </main>
    
    @include('components.footer')
</body>
</html>