@extends("_utils.layout")

@section("head")
<title> {{ $post->title }} | BagasJS </title>
<link rel="stylesheet" href="/static/tailwind.min.css">
<link rel="stylesheet" href="/static/tailwind-add.css">
@endsection

@section("body")
@include("_utils.navbar")
<main class="flex flex-col mt-5">
    <div class="mx-14">
        <div class="mb-1">
            <h1 class="font-extrabold text-5xl">{{ $post->title }}</h1>
            <p class="font-extralight text-sm">At {{ $post->uploaded_at }} by {{ $post->author->name }}</p>
        </div>
        <p class="font-light text-md text-justify">{!! $post->body !!}</p>
    </div>
</main>
@include("_utils.footer")

@endsection