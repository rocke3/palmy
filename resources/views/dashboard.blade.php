<x-app-layout>


    <div class="container py-12">
        <div class="lg:grid lg:grid-cols-3 gap-4">
            <div class="">
                <div class="bg-white overflow-hidden shadow-sm rounded-[25px] mb-4 min-h-[320px]">
                    <div class="p-6 text-gray-900 text-center">
                        <img class="m-auto" src="/img/fb.png" width="100">
                        <h3 class="mt-3">{{ Auth::user()->name }}</h3>
                        <p class="text-[#8381af] mt-2"><span
                                class="material-symbols-outlined align-bottom">location_on</span>{{ Auth::user()->address }},
                            {{ Auth::user()->city }}</p>
                        <p class="text-[#8381af] mt-2"><span
                                class="material-symbols-outlined align-bottom">person_check</span> 20k
                            Followers</p>
                        <div class="mt-2 text-center">
                            <button class="btn btn-gradiant">{{ __('View/Edit') }}</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm rounded-[25px] mb-4">
                    <div class="p-3">
                        <p class="font-bold text-2xl text-[#8280af]">
                            <span class="material-symbols-outlined align-bottom text-[30px]">notifications_active
                            </span> Notifications
                        </p>
                        <div class="h-[320px] overflow-y-scroll px-2 ">
                            <div class="flex flex-row shadow-lg border rounded-lg p-3 mt-4">
                                <div class="w-[55px]">
                                    <img class="m-auto" src="/img/fb.png" width="50">
                                </div>
                                <div class="w-full pl-2">
                                    <h3 class="m-0 leading-tight font-bold">Ultricies non iaculis</h3>
                                    <p class="m-0 leading-tight text-sm text-slate-800">Pretium quis enim</p>
                                </div>
                                <div class="w-[100px] text-sm font-bold  text-slate-400 md:mt-4">10:30 am</div>
                            </div>
                            <div class="flex flex-row shadow-lg border rounded-lg p-3 mt-4">
                                <div class="w-[55px]">
                                    <img class="m-auto" src="/img/apple.png" width="50">
                                </div>
                                <div class="w-full pl-2">
                                    <h3 class="m-0 leading-tight font-bold">Ultricies non iaculis</h3>
                                    <p class="m-0 leading-tight text-sm text-slate-800">Pretium quis enim</p>
                                </div>
                                <div class="w-[100px] text-sm font-bold  text-slate-400 md:mt-4">10:30 am</div>
                            </div>
                            <div class="flex flex-row shadow-lg border rounded-lg p-3 mt-4">
                                <div class="w-[55px]">
                                    <img class="m-auto" src="/img/google.png" width="50">
                                </div>
                                <div class="w-full pl-2">
                                    <h3 class="m-0 leading-tight font-bold">Ultricies non iaculis</h3>
                                    <p class="m-0 leading-tight text-sm text-slate-800">Pretium quis enim</p>
                                </div>
                                <div class="w-[100px] text-sm font-bold  text-slate-400 md:mt-4">10:30 am</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="bg-white overflow-hidden shadow-sm rounded-[25px] mb-4 min-h-[320px]">
                    <div class="lg:grid lg:grid-cols-2 gap-2 p-3">
                        <div>
                            <p class="font-bold text-2xl text-[#8280af]">
                                <span class="material-symbols-outlined align-bottom text-[30px]">favorite</span>
                                Donations
                            </p>
                            <div class="text-center mt-16 mb-6">
                                <p class="font-bold text-lg">$ 1,200</p>
                                <p class="text-sm">Total Donated Amount</p>
                            </div>
                            <div class="mt-2 text-center">
                                <button class="btn btn-gradiant">{{ __('Transactions') }}</button>
                            </div>
                        </div>
                        <div>asd</div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm rounded-[25px] mb-4 ">
                    <div class="p-3">
                        <p class="font-bold text-2xl text-[#8280af]">
                            Project
                        </p>
                        <div class="h-[320px] overflow-y-scroll px-2">
                            <div class="shadow rounded-lg overflow-hidden mt-3">
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
                            <div class="shadow rounded-lg overflow-hidden mt-3">
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
                        </div>

                    </div>
                </div>
            </div>
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
            </div>
        </div>

    </div>
</x-app-layout>
