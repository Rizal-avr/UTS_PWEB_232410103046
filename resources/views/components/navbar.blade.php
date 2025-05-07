<nav class="bg-blue-900 dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-cyan-400 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="text-white self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Penjualan Sayur</span>
        </a>

        <div class="flex items-center md:order-2 space-x-4">
            <ul class="flex flex-row space-x-8 rtl:space-x-reverse font-medium">
                <li>
                    <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" 
                       class="text-white hover:text-blue-700 dark:text-white dark:hover:text-blue-500">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}" 
                       class="text-white hover:text-blue-700 dark:text-white dark:hover:text-blue-500">
                        Pengelolaan
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile', ['username' => request()->query('username')]) }}" 
                       class="text-white hover:text-blue-700 dark:text-white dark:hover:text-blue-500">
                        Profile
                    </a>
                </li>
            </ul>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" 
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>

