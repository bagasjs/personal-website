<nav class="flex flex-col">
    <div class="p-4 flex justify-between items-center border-b border-black">
        <a href="/" class="flex items-center">
            <img src="/static/logo.jpeg" class="h-8 mr-3 rounded-full" alt="Logo">
            <span class="self-center font-bold text-2xl">Bagas JS</span>
        </a>
        <div class="flex">
            <a class="ml-3" href="">
                Github
            </a>
            <a class="ml-3" href="">
                Instagram
            </a>
            <a class="ml-3" href="">
                MyAnimeList
            </a>
        </div>
    </div>
    <div class="px-4 py-3 bg-gray-50 border-b border-black">
        <a href="" class="mr-5">
            <span class="text-sm font-light"> ABOUT </span>
        </a>
        <a href="" class="mr-5">
            <span class="text-sm font-light"> ARTICLES </span>
        </a>
        <a href="" class="mr-5">
            <span class="text-sm font-light"> ANIME </span>
        </a>
        @auth
        <a href="{{ route('logout') }}" class="mr-5">
            <span class="text-sm text-red-700 p-1 font-bold border border-red-700 hover:bg-red-700 hover:text-white"> SIGN OUT </span>
        </a>
        @else
        <a href="{{ route('login') }}" class="mr-5">
            <span class="text-sm font-light text-blue-700"> SIGN IN </span> 
        </a>
        <a href="{{ route('register') }}" class="mr-5">
            <span class="text-sm text-blue-700 p-1 font-bold border border-blue-700 hover:bg-blue-700 hover:text-white"> SIGN UP </span>
        </a>
        @endauth
    </div>
</nav>