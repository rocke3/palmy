<x-app-layout>
    <style>
        .splide__pagination {
            bottom: auto !important;
            top: 15px
        }

        .splide__pagination .splide__pagination__page {
            width: 50px;
            border-radius: 5px !important;
        }

        .splide__pagination__page.is-active {
            transform: scale(1.1) !important;
        }
    </style>

    <div class="container py-12">

        <div class="lg:grid lg:grid-cols-3 gap-4">
            {{-- Left side --}}
            <div class="">
                <div class="bg-white overflow-hidden shadow-sm rounded-[25px] mb-4 min-h-[320px]">
                    <div class="p-6 text-gray-900 text-center">
                        <img class="m-auto rounded-full" src="/images/{{ Auth::user()->image }}" width="100">
                        <h3 class="mt-5">{{ Auth::user()->name }}</h3>
                        <p class="text-[#8381af] mt-2"><span
                                class="material-symbols-outlined align-bottom">location_on</span>{{ Auth::user()->address }},
                            {{ Auth::user()->city }}</p>
                        <p class="text-[#8381af] mt-2"><span
                                class="material-symbols-outlined align-bottom">person_check</span> 20k
                            Followers</p>
                        <div class="mt-4 text-center">
                            <button class="btn btn-gradiant" data-modal-target="static-modal"
                                data-modal-toggle="static-modal">{{ __('View/Edit') }}</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm rounded-[25px] mb-4">
                    <div class="p-3">
                        <p class="font-bold text-2xl text-[#8280af] mb-3">
                            <span class="material-symbols-outlined align-bottom text-[30px]">notifications_active
                            </span> Notifications
                        </p>
                        <div class="h-[320px] overflow-y-scroll px-2 ">

                            <div class="flex flex-row shadow-lg border rounded-lg p-3 mb-3">
                                <div class="w-[55px]">
                                    <img class="m-auto" src="/img/fb.png" width="50">
                                </div>
                                <div class="w-full pl-2">
                                    <h3 class="m-0 leading-tight font-bold">Ultricies non iaculis</h3>
                                    <p class="m-0 leading-tight text-sm text-slate-800">Pretium quis enim</p>
                                </div>
                                <div class="w-[100px] text-sm font-bold  text-slate-400 md:mt-4">10:30 am</div>
                            </div>
                            <div class="flex flex-row shadow-lg border rounded-lg p-3 mb-3">
                                <div class="w-[55px]">
                                    <img class="m-auto" src="/img/apple.png" width="50">
                                </div>
                                <div class="w-full pl-2">
                                    <h3 class="m-0 leading-tight font-bold">Ultricies non iaculis</h3>
                                    <p class="m-0 leading-tight text-sm text-slate-800">Pretium quis enim</p>
                                </div>
                                <div class="w-[100px] text-sm font-bold  text-slate-400 md:mt-4">10:30 am</div>
                            </div>

                            @for ($i = 0; $i < 10; $i++)
                                <div class="flex flex-row shadow-lg border rounded-lg p-3 mb-3">
                                    <div class="w-[55px]">
                                        <img class="m-auto" src="/img/google.png" width="50">
                                    </div>
                                    <div class="w-full pl-2">
                                        <h3 class="m-0 leading-tight font-bold">Ultricies non iaculis</h3>
                                        <p class="m-0 leading-tight text-sm text-slate-800">Pretium quis enim</p>
                                    </div>
                                    <div class="w-[100px] text-sm font-bold  text-slate-400 md:mt-4">10:30 am</div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            {{-- Midde --}}
            <div class="">
                <div class="bg-white overflow-hidden shadow-sm rounded-[25px] mb-4 min-h-[320px]">
                    <div class="p-3 pb-0">
                        <div class="flex flex-row font-bold">
                            <div class="font-bold text-2xl text-[#8280af] w-full">
                                <span class="material-symbols-outlined align-bottom text-[30px]">favorite</span>
                                Donations
                            </div>
                            <div class="text-end w-[230px]">
                                <button class="btn btn-gradiant">{{ __('$ 1,200 Total') }}</button>

                            </div>
                        </div>
                    </div>
                    <div class="p-3 pt-0">
                        <div class="w-full">
                            <canvas class="mx-auto max-w-[200px] w-full" id="donateChart"></canvas>
                        </div>
                        <div class="mt-2 text-center">
                            <button class="btn btn-gradiant">{{ __('Transactions') }}</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm rounded-[25px] mb-4 ">
                    <div class="p-3">
                        <p class="font-bold text-2xl text-[#8280af] mb-3">
                            Project
                        </p>
                        <div class="h-[320px] overflow-y-scroll px-2 ">
                            @for ($i = 0; $i < 10; $i++)
                                <div class="shadow rounded-lg overflow-hidden mb-3">
                                    <img class="w-full" src="/img/image.png" alt="">
                                    <div class="p-2">
                                        <p class="font-bold">Plant Trees Plant Life</p>
                                        <p class="text-[#8381af] text-sm">
                                            <span
                                                class="material-symbols-outlined align-bottom text-[20px]">location_on</span>
                                            Borshijura,
                                            Moulvibazar
                                        </p>
                                    </div>
                                </div>
                            @endfor
                        </div>

                    </div>
                </div>
            </div>
            {{-- Right Side --}}
            <div class="bg-white overflow-hidden shadow-sm rounded-[25px] mb-4 p-3">
                <div class="flex flex-row">
                    <div class="w-[55px]">
                        <img class="m-auto" src="/img/fb.png" width="50">
                    </div>
                    <div class="w-full pl-2">
                        <h3 class="m-0 leading-tight">{{ Auth::user()->name }}</h3>
                        <p class="m-0 leading-tight text-sm text-slate-400">2 hrs</p>
                    </div>
                    <button class="btn btn-gradiant p-1 px-3 h-7">{{ __('Follow') }}</button>
                </div>
                <div class="h-[610px] overflow-y-scroll ">
                    <div>
                        <section id="splide1" class="splide p-4 mt-2" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img class=" w-full mx-auto" src="/img/slide1.png">
                                    </li>
                                    <li class="splide__slide">
                                        <img class=" w-full mx-auto" src="/img/slide2.png">
                                    </li>
                                    <li class="splide__slide">
                                        <img class=" w-full mx-auto" src="/img/slide3.png">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div>
                        <section id="splide2" class="splide p-4 mt-2" aria-labelledby="carousel-heading">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img class=" w-full mx-auto" src="/img/slide1.png">
                                    </li>
                                    <li class="splide__slide">
                                        <img class=" w-full mx-auto" src="/img/slide2.png">
                                    </li>
                                    <li class="splide__slide">
                                        <img class=" w-full mx-auto" src="/img/slide3.png">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-gradiant px-1 mt-4 w-full sm:w-[40%]">{{ __('New Post') }}</button>
                    <button class="btn btn-gradiant px-1 mt-4 w-full sm:w-[40%]">{{ __('New Project') }}</button>
                </div>
            </div>
        </div>



        <!-- Main modal -->
        <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-[50px] shadow border-[4px] border-[#8280af] py-6">
                    <div class="p-4 md:p-5 space-y-4 text-center">
                        <img class="m-auto" src="/img/fb.png" width="100">
                        <div class=" bg-black pl-2 pb-2 rounded-[25px]">
                            <div class="mt-5 border-[1px] border-black shadow rounded-[25px] p-3 bg-white">
                                {{ Auth::user()->about }}
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class=" p-4 md:p-5 ">
                        <button data-modal-hide="static-modal" type="button"
                            class="btn btn-gradiant">Seattle,WA</button>
                        <button data-modal-hide="static-modal" type="button"
                            class="btn btn-gradiant float-end">Non-Profit</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#splide1').mount();
            new Splide('#splide2').mount();
            const data = {
                datasets: [{
                    data: [300, 50, 100],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }],

            };
            const config = {
                type: 'pie',
                data: data,
            };
            const ctx = document.getElementById('donateChart');
            new Chart(ctx, config);
        });
    </script>
</x-app-layout>
