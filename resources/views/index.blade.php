@extends("_utils.layout")

@section("head")
<title> Home | BagasJS </title>
<link rel="stylesheet" href="/static/tailwind.min.css">
<link rel="stylesheet" href="/static/tailwind-add.css">
@endsection

@section("body")
@include("_utils.navbar")
<main class="flex flex-col">
    <section id="jumbotron" class="p-8 mb-3 block md:flex md:justify-around">
        <img src="/static/img/renge.png" class="max-h-96 h-full" alt="Jumbotron Image">
        <div class="sm:w-full md:w-1/2 flex flex-col justify-center">
            <div class="text-center md:text-left">
                <h1 class="text-5xl font-extrabold underline mb-3">Hello, Bagas here</h1>
                <h3 class="text-xl font-light mb-3">
                    I'm a programmer, an anime lover, and a bit gamer are in my soul. Basically, I'm just a hardline weaboo.
                </h3>

                <form action="/posts">
                    <div class="border border-gray-400 rounded-lg flex w-full">
                        <input type="search" name="search" class="w-full p-2.5 rounded-lg" placeholder="Search any article">
                        <button class="p-2.5">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <section id="feeds" class="p-4 mb-3 flex flex-wrap flex-row items-center justify-around">
        <a href="" class="max-w-xxs w-full">
            <img class="mb-1 w-full" src="/static/img/na.png" alt="Post Image">
            <h1 class="font-bold text-xl">Post Title Here</h1>
            <p class="font-light text-md truncate md:whitespace-normal mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, deserunt tempora distinctio molestiae nulla incidunt unde magni animi consequatur, quidem mollitia sint nobis veritatis ab!</p>
        </a>
        <a href="" class="max-w-xxs w-full">
            <img class="mb-1 w-full" src="/static/img/na.png" alt="Post Image">
            <h1 class="font-bold text-xl">Post Title Here</h1>
            <p class="font-light text-md truncate md:whitespace-normal mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, deserunt tempora distinctio molestiae nulla incidunt unde magni animi consequatur, quidem mollitia sint nobis veritatis ab!</p>
        </a>
        <a href="" class="max-w-xxs w-full">
            <img class="mb-1 w-full" src="/static/img/na.png" alt="Post Image">
            <h1 class="font-bold text-xl">Post Title Here</h1>
            <p class="font-light text-md truncate md:whitespace-normal mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, deserunt tempora distinctio molestiae nulla incidunt unde magni animi consequatur, quidem mollitia sint nobis veritatis ab!</p>
        </a>
        <a href="" class="max-w-xxs w-full">
            <img class="mb-1 w-full" src="/static/img/na.png" alt="Post Image">
            <h1 class="font-bold text-xl">Post Title Here</h1>
            <p class="font-light text-md truncate md:whitespace-normal mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, deserunt tempora distinctio molestiae nulla incidunt unde magni animi consequatur, quidem mollitia sint nobis veritatis ab!</p>
        </a>
    </section>

    <section id="favourite-anime" class="p-4 bg-gray-900 text-white">
        <h1 class="text-xl font-extrabold underline mb-3">Favourite Anime</h1>

        <a href="" class="p-4 w-full flex flex-col md:flex-row">
            <img class="md:max-w-xs w-full" src="/static/img/na.png" alt="Post Image">
            <div class="md:ml-3 flex flex-col justify-center">
                <h1 class="font-bold text-xl">Konosuba</h1>
                <p class="font-light text-md md:w-1/2">Darkness blacker than black and darker than dark, I beseech thee, combine with my deep crimson. The time of awakening cometh. Justice, fallen upon the infallible boundary, appear now as an intangible distortions! Explosion!!!</p>
            </div>
        </a>

        <div class="p-4 mb-3 flex flex-wrap justify-between">
            <a href="" class="md:max-w-xs w-full">
                <img class="mb-1 w-full" src="/static/img/na.png" alt="Post Image">
                <h1 class="font-bold text-xl">Gintama</h1>
                <p class="font-light text-md mb-6">Life is like a tree, you can learn a lot while climbing it, like that I'm sweating a lot.</p>
            </a>
            <a href="" class="md:max-w-xs w-full">
                <img class="mb-1 w-full" src="/static/img/na.png" alt="Post Image">
                <h1 class="font-bold text-xl">K-On</h1>
                <p class="font-light text-md mb-6">Good story, Love the music, and of course love the characters (especially azunyan).</p>
            </a>
            <a href="" class="md:max-w-xs w-full">
                <img class="mb-1 w-full" src="/static/img/na.png" alt="Post Image">
                <h1 class="font-bold text-xl">Blend S</h1>
                <p class="font-light text-md mb-6">Smile, sweet, sister, sadistic, surprise, Snoop Doggg</p>
            </a>
        </div>
    </section>
</main>

@include("_utils.footer")

@endsection