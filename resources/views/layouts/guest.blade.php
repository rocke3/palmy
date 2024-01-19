<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Palmy') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600&family=Roboto:wght@100;300;400;500&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background: rgb(156, 152, 187);
            background: linear-gradient(128deg, rgba(156, 152, 187, 1) 0%, rgba(232, 205, 215, 1) 100%);
            font-family: "Roboto", sans-serif;
            min-height: 100vh
        }
    </style>
</head>

<body class="font-sans text-gray-900 antialiased lg:px-5">
    <div class="container relative">
        <div class="md:absolute top-0 left-0 w-full p-4">
            <div class="mt-4 pt-4">
                <div class="md:flex md:flex-row">
                    <div class="w-[180px] text-3xl font-extrabold text-white">
                        <img class=" inline-block" src="/img/logo.png" width="45" /> PALMY
                    </div>
                    <div class="md:text-end mt-4 md:mt-0 w-full">
                        <a class="btn btn-home" href="/register">Join
                            Now</a>
                        <a class="btn btn-home btn-alt pe-1" href="/login">
                            SIGN IN
                            <span
                                class="material-symbols-outlined bg-white rounded-full h-full w-[30px] text-[25px] ms-4 align-bottom text-[#8280af] p-[2px]">person</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:min-h-screen flex flex-col justify-center pt-6 sm:pt-0 columns-2">
            <div class="md:flex md:flex-row">
                <div class="w-full ">
                    <div class="md:max-w-xl mt-6 p-6 bg-white rounded-3xl border-4 border-[#8280af]">
                        {{ $slot }}
                    </div>
                    @if (Route::is('login') || Route::is('/'))
                        <a class="inline-block p-1 mt-4" href="">
                            <img class=" mt-3 shadow rounded-xl hover:shadow-lg" width="190" src="/img/appstore.png">
                        </a>
                        <a class="inline-block p-1 " href="">
                            <img class="mt-3 shadow rounded-xl hover:shadow-lg" width="190" src="/img/playstore.png">
                        </a>
                    @endif
                </div>
                <div class="w-full ">
                    <img class="" src="/img/homebg.png">
                </div>
            </div>


        </div>
    </div>
</body>

</html>
