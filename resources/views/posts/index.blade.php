@extends("_utils.layout")

@section("head")
<title> Posts | BagasJS </title>
<link rel="stylesheet" href="/static/tailwind.min.css">
<link rel="stylesheet" href="/static/tailwind-add.css">
@endsection

@section("body")
@include("_utils.navbar")
<main class="flex flex-col">

    <section class="bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h3 class="text-white font-bold text-xl border-b pb-2 border-white">Latest Post</h3>
            <h1 class="my-2 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl text-white">{{ $posts->first()->title }}</h1>
            <p class="mb-8 text-lg font-normal lg:text-xl sm:px-16 lg:px-48 text-gray-400">{{ $posts->first()->excerpt }}</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="/posts/{{ $posts->first()->slug }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-900">
                    Read this post
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="{{ $posts[mt_rand(0, count($posts))]->slug }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 text-white border-gray-700 hover:bg-gray-700 focus:ring-gray-800">
                    Surprise me
                </a>  
            </div>
        </div>
    </section>


    <section id="feeds" class="p-4 mb-3 flex flex-wrap flex-row items-center justify-around">
        @foreach($posts as $post)
        <a href="/posts/{{ $post->slug }}" class="max-w-xxs w-full">
            <img class="mb-1 w-full" src="/static/img/na.png" alt="Post Image">
            <h1 class="font-bold text-xl">{{ $post->title }}</h1>
            <p class="font-light text-md truncate md:whitespace-normal mb-3">{{ $post->excerpt }}</p>
        </a>
        @endforeach
    </section>
</main>

@include("_utils.footer")

@endsection