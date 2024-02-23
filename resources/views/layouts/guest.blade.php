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

<body class="font-sans text-gray-900 antialiased ">
    <div class="container relative lg:px-5">
        <div class=" sm:p-4">
            <div class="mt-4 pt-4">
                <div class="flex flex-row">
                    <div class="w-[70px] sm:w-[250px] text-3xl font-extrabold text-white">
                        <a href=""><img class=" inline-block" src="/img/logo.png" width="45" /> <span
                                class="hidden sm:inline-block">PALMY</span></a>
                    </div>
                    <div class="text-end w-full">
                        <a class="btn btn-home btn-alt me-1" href="/register">Join
                            Now</a>
                        <a class="btn btn-home btn-alt  pe-10 sm:pe-14 relative" href="/login">
                            SIGN IN
                            <span
                                class="material-symbols-outlined absolute bg-white rounded-full h-[20px] w-[20px] sm:h-[27px] sm:w-[27px] text-[15px] sm:text-[22px] text-center text-[#8280af] p-[3px] right-[5px] top-[4px]">person</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" flex flex-col justify-center columns-2">
            <div class="lg:flex lg:flex-row mb-10">
                <div class="w-full max-w-[570px] mt-6 lg:pt-6 sm:ps-16">
                    <div class="p-4 sm:p-6 box">
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
                        <div class=" mt-4 text-center mb-4">
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
    <div id="footerMenu" class="lg:mt-12 text-white bg-[#8280af]">
        <div class="container lg:px-5 py-2">
            <div class="grid grid-cols-2 md:grid-cols-4  xl:grid-cols-8 text-center ">
                <div class="p-1">
                    <img class="inline-block me-1" src="/img/logo.png" width="30">
                    <span class=" font-bold text-xl ">PALMY</span>
                </div>
                <div><a class=" inline-block p-2 hover:underline" href="#" data-modal-target="accessibility"
                        data-modal-toggle="accessibility">Accessibility</a></div>
                <div><a class=" inline-block p-2 hover:underline" href="#" data-modal-target="privacy"
                        data-modal-toggle="privacy">Privacy Policy</a></div>
                <div><a class=" inline-block p-2 hover:underline" href="#" data-modal-target="cookie"
                        data-modal-toggle="cookie">Cookie Policy</a></div>
                <div><a class=" inline-block p-2 hover:underline" href="#" data-modal-target="brand"
                        data-modal-toggle="brand">Brand Policy</a></div>
                <div><a class=" inline-block p-2 hover:underline" href="#" data-modal-target="copyright"
                        data-modal-toggle="copyright">Copyright Policy</a></div>
                <div><a class=" inline-block p-2 hover:underline" href="#" data-modal-target="support"
                        data-modal-toggle="support">Support</a></div>
                <div><a class=" inline-block p-2 hover:underline" href="#" data-modal-target="contact"
                        data-modal-toggle="contact">Contact</a></div>
            </div>
        </div>
    </div>


    <x-modal id="accessibility">
        <x-accessibility />
    </x-modal>
    <x-modal id="privacy">
        <x-privacy />
    </x-modal>
    <x-modal id="cookie">
        <x-cookie />
    </x-modal>
    <x-modal id="brand">
        <x-brand />
    </x-modal>
    <x-modal id="copyright">
        <x-copyright />
    </x-modal>
    <x-modal id="support">
        <x-support />
    </x-modal>
    <x-modal id="contact">
        <x-contact />
    </x-modal>


</body>

</html>
