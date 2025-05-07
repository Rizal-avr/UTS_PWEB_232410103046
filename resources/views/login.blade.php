<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Web Widget Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-300">
    <div class="max-w-md mx-auto my-10 bg-blue-900 p-8 rounded-xl shadow shadow-slate-300">
        <a class="flex items-center text-align: justify-center mb-6 text-2xl font-semibold text-white dark:text-white">
            Kelola Penjualan Sayuran    
        </a>
        <hr style="border: 1px solid #ccc; margin: 20px 0;">
        <h1 class="text-white text-4xl font-medium">Login</h1>
        
        @if(session('error'))
            <div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                {{ session('error') }}
            </div>
        @endif
        
        <form method="POST" action="{{ route('login') }}" class="my-10">
            @csrf
            <div class="flex flex-col space-y-5">
                <label for="username">
                    <p class="font-medium text-white pb-2">Username</p>
                    <input id="username" name="username" type="text" 
                        class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" 
                        placeholder="Masukkan username" required>
                </label>
                <label for="password">
                    <p class="font-medium text-white pb-2">Password</p>
                    <input id="password" name="password" type="password" 
                        class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" 
                        placeholder="Masukkan password" required>
                </label>
                <button type="submit" class="w-full py-3 font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                    <span>Login</span>
                </button>
            </div>
        </form>
    </div>
</body>
</html>
