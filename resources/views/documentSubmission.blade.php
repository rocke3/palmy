<x-app-layout>
    <div class="py-12">
        <div class="box max-w-[700px] mx-auto m-1 p-4 py-6 relative">
            <form class="my-6 py-6" action="{{ route('doc.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="mt-4">
                    <label
                        class="border-dashed border-2 border-[#a19cbf] text-center cursor-pointer block max-w-[400px] mx-auto p-6 rounded-[20px]">
                        <span class="material-symbols-outlined text-[60px] text-[#9791b8]">folder_open</span>
                        <h2 class="text-slate-700 text-3xl mb-2 mt-2 font-bold">Upload Document</h2>
                        <p class="mb-4 text-slate-400 text-lg">*PDF/Images Only</p>
                        <span
                            class="material-symbols-outlined text-[40px] text-white rounded bg-gradient-to-r from-[#9791b8] to-[#c9b7cc]">add</span>
                        <x-text-input class="hidden" id="pdfup" type="file" name="document" :value="old('document')"
                            required accept="application/pdf,image/jpg, image/jpeg, image/png" />
                    </label>
                    <div class=" text-[#b0a3c2] text-sm mt-2 text-center">
                        Maximum allowed file size is 1MB and dimensions should be less than 1080x1080 pixels.
                    </div>
                    <x-input-error :messages="$errors->get('document')" class="mt-2" />
                </div>

                <div class="mt-6 sm:mt-10 sm:pt-10 text-center">
                    <x-primary-button class="max-w-[350px]">{{ __('Next') }}</x-primary-button>
                </div>
            </form>
            @if (Auth::user()->document !== null)
                <div class="absolute w-full h-full bg-white top-0 left-0 rounded-[40px] bg-opacity-80 text-center">
                    <div class="h-full relative mx-16">
                        <div class="p-6 box absolute translate-y-[50%] w-full">
                            <span
                                class="material-symbols-outlined text-white text-[80px] rounded-full p-4 bg-gradient-to-r from-[#9791b7] to-[#cab8cc] ">schedule</span>
                            <h1 class="text-4xl font-extrabold mt-3">Your Verification<br> Request is in Process</h1>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
