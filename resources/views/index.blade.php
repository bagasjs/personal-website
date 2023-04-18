@extends("_utils.layout")

@section("head")
<title> Home | BagasJS </title>
<link rel="stylesheet" href="/static/tailwind.min.css">
<link rel="stylesheet" href="/static/tailwind-add.css">
@endsection

@section("body")
@include("_utils.navbar")
<main class="flex flex-col">
    <div class="p-8 mb-3 block md:flex md:justify-around">
        <img src="/static/img/renge.png" class="max-h-96 h-full" alt="Jumbotron Image">
        <div class="sm:w-full md:w-1/2 flex flex-col justify-center">
            <div>
                <h1 class="text-5xl font-extrabold underline mb-3">Hello, Bagas here</h1>
                <h3 class="text-xl font-light mb-3">
                    I'm a programmer, an anime lover, and a bit gamer are in my soul. Basically, I'm just a hardline weaboo.
                </h3>
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Read a random article
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="p-4 mb-3 flex flex-wrap flex-row items-center justify-around">
        <a href="" class="max-w-xxs w-full">
            <img class="mb-1 w-full" src="https://picsum.photos/200" alt="Post Image">
            <h1 class="font-bold text-xl">Post Title Here</h1>
            <p class="font-light text-md truncate md:whitespace-normal mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, deserunt tempora distinctio molestiae nulla incidunt unde magni animi consequatur, quidem mollitia sint nobis veritatis ab!</p>
        </a>
        <a href="" class="max-w-xxs w-full">
            <img class="mb-1 w-full" src="https://picsum.photos/200" alt="Post Image">
            <h1 class="font-bold text-xl">Post Title Here</h1>
            <p class="font-light text-md truncate md:whitespace-normal mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, deserunt tempora distinctio molestiae nulla incidunt unde magni animi consequatur, quidem mollitia sint nobis veritatis ab!</p>
        </a>
        <a href="" class="max-w-xxs w-full">
            <img class="mb-1 w-full" src="https://picsum.photos/200" alt="Post Image">
            <h1 class="font-bold text-xl">Post Title Here</h1>
            <p class="font-light text-md truncate md:whitespace-normal mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, deserunt tempora distinctio molestiae nulla incidunt unde magni animi consequatur, quidem mollitia sint nobis veritatis ab!</p>
        </a>
        <a href="" class="max-w-xxs w-full">
            <img class="mb-1 w-full" src="https://picsum.photos/200" alt="Post Image">
            <h1 class="font-bold text-xl">Post Title Here</h1>
            <p class="font-light text-md truncate md:whitespace-normal mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, deserunt tempora distinctio molestiae nulla incidunt unde magni animi consequatur, quidem mollitia sint nobis veritatis ab!</p>
        </a>
    </div>

    <div class="p-4 bg-gray-900 text-white">
        <h1 class="text-xl font-extrabold underline mb-3">Favourite Anime</h1>

        <a href="" class="p-4 w-full flex flex-col md:flex-row">
            <img class="md:max-w-xs w-full" src="https://picsum.photos/200" alt="Post Image">
            <div class="md:ml-3 flex flex-col justify-center">
                <h1 class="font-bold text-xl">Konosuba</h1>
                <p class="font-light text-md md:w-1/2">Darkness blacker than black and darker than dark, I beseech thee, combine with my deep crimson. The time of awakening cometh. Justice, fallen upon the infallible boundary, appear now as an intangible distortions! Explosion!!!</p>
            </div>
        </a>

        <div class="p-4 mb-3 flex flex-wrap justify-between">
            <a href="" class="md:max-w-xs w-full">
                <img class="mb-1 w-full" src="https://picsum.photos/200" alt="Post Image">
                <h1 class="font-bold text-xl">Gintama</h1>
                <p class="font-light text-md mb-6">Life is like a tree, you can learn a lot while climbing it, like that I'm sweating a lot.</p>
            </a>
            <a href="" class="md:max-w-xs w-full">
                <img class="mb-1 w-full" src="https://picsum.photos/200" alt="Post Image">
                <h1 class="font-bold text-xl">K-On</h1>
                <p class="font-light text-md mb-6">Good story, Love the music, and of course love the characters (especially azunyan).</p>
            </a>
            <a href="" class="md:max-w-xs w-full">
                <img class="mb-1 w-full" src="https://picsum.photos/200" alt="Post Image">
                <h1 class="font-bold text-xl">Blend S</h1>
                <p class="font-light text-md mb-6">Smile, sweet, sister, sadistic, surprise, Snoop Doggg</p>
            </a>
        </div>
    </div>

    <div>

    </div>
</main>

<footer class="p-10">
    <div class="flex border-b border-black justify-between mb-1">
        <div class="w-1/2">
            <h1 class="font-bold text-2xl">
                Bagas JS
            </h1>
        </div>
        <div class="w-1/2 flex justify-end">
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
    <p class="text-center">© 2023 Bagas Jonathan Sitanggang</p>
</footer>
@endsection