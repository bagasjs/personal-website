@extends("_utils.layout")

@section("head")
<title> Create new post | BagasJS </title>
<link rel="stylesheet" href="/static/tailwind.min.css">
<link rel="stylesheet" href="/static/tailwind-add.css">
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<script defer type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
@endsection

@section("body")
@include("_utils.navbar")
<main class="flex flex-col mt-5">
    <div class="mx-14">
        <form action="/posts" method="post">
            @csrf
            <div class="pb-3 border-b border-black mb-3">
                <h1 class="text-5xl font-bold">Create A Post</h1>                
                @include("_utils.alerts")
            </div>
            <div class="mb-3">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input name="title" type="text" id="title" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value='{{ old("title") }}'>
                @error("title")
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">Error</span> {{ $message }}
                </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                <input name="body" type="hidden" id="body" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value='{{ old("body") }}'>
                <trix-editor input="body"></trix-editor>
                @error("body")
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">Error</span> {{ $message }}
                </p>
                @enderror
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
</main>
@include("_utils.footer")

@endsection