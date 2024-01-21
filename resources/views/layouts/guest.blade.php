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
        href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800&family=Roboto:wght@100;300;400;500&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap"
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
        <div class="lg:absolute top-0 left-0 w-full p-4">
            <div class="mt-4 pt-4">
                <div class="lg:flex lg:flex-row">
                    <div class="w-[250px] text-3xl font-extrabold text-white">
                        <img class=" inline-block" src="/img/logo.png" width="45" /> PALMY
                    </div>
                    <div class="text-center lg:text-end mt-6 lg:mt-0 w-full">
                        <a class="btn btn-home me-1" href="/register">Join
                            Now</a>
                        <a class="btn btn-home btn-alt pe-14 relative" href="/login">
                            SIGN IN
                            <span
                                class="material-symbols-outlined absolute bg-white rounded-full h-[27px] w-[27px] text-[22px] ms-4 text-center text-[#8280af] p-[3px] right-[5px] top-[5px]">person</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:min-h-screen flex flex-col justify-center columns-2">
            <div class="lg:flex lg:flex-row">
                <div class="w-full lg:max-w-2xl mt-6 lg:pt-6">
                    <div class="p-6 box">
                        {{ $slot }}
                        <div class="mt-6 text-center">
                            <a class="inline-block border-2 rounded-full p-3 m-1 hover:shadow" href="">
                                <img class="inline-block" src="/img/fb.png" width="25" />
                            </a>
                            <a class="inline-block border-2 rounded-full p-3 m-1 hover:shadow" href="">
                                <img class="inline-block" src="/img/google.png" width="25" />
                            </a>
                            <a class="inline-block border-2 rounded-full p-3 m-1 hover:shadow" href="">
                                <img class="inline-block" src="/img/apple.png" width="25" />
                            </a>
                        </div>
                    </div>

                    @if (!Route::is('register'))
                        <div class=" mt-4 text-center">
                            <a class="inline-block p-1" href="">
                                <img class="shadow rounded-xl hover:shadow-lg" width="190" src="/img/appstore.png">
                            </a>
                            <a class="inline-block p-1 " href="">
                                <img class="shadow rounded-xl hover:shadow-lg" width="190" src="/img/playstore.png">
                            </a>
                        </div>
                    @endif
                </div>
                <div class="w-full mt-6 lg:pt-[150px] text-end ">
                    <img class="w-full  max-w-[700px] sm:float-end sm:ps-4 align-bottom" src="/img/homebg.png">
                </div>
            </div>


        </div>
    </div>
</body>

</html>
