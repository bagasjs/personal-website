@extends("_utils.layout")

@section("head")
<title> Sign Up | BagasJS </title>
<link rel="stylesheet" href="/static/tailwind.min.css">
<link rel="stylesheet" href="/static/flowbite.min.css">
<script src="/static/flowbite.min.js" defer></script>
@endsection

@section("body")

<main class="py-10 flex justify-center">
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" method="POST" action="{{ route('register') }}">
            @csrf
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sign up to Bagas's personal blog</h5>
            @include("_utils.alerts")
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required value='{{ old("email") }}'>
                @error("email")
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">Error</span> {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required value='{{ old("name") }}'>
                @error("name")
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">Error</span> {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                @error("password")
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">Error</span> {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm your password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                @error("password_confirmation")
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">Error</span> {{ $message }}
                </p>
                @enderror
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create my account</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                Already registered? <a href="{{ route('login') }}" class="text-blue-700 hover:underline dark:text-blue-500">Authenticate me</a>
            </div>
        </form>
    </div>
</main>

@endsection