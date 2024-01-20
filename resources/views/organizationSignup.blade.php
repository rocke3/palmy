<x-app-layout>
    <div class="py-12">
        <div class=" box max-w-[700px] mx-auto m-1 p-4 py-6">
            <form action="{{ route('org.update') }}" method="post">
                @csrf
                @method('patch')
                <h1 class="text-2xl font-extrabold text-center my-4">Sign Up</h1>
                <div class="lg:grid lg:grid-cols-2 gap-4">
                    <div class="">
                        <div class="mt-4">
                            <label
                                class=" cursor-pointer w-[150px] h-[150px] mx-auto bg-slate-100 hover:bg-red-100 block rounded-full text-center p-[35px] relative hover:shadow">
                                <span class="material-symbols-outlined text-[80px] opacity-10">image</span>
                                <input type="file" name="file" class="hidden">
                                <span
                                    class="material-symbols-outlined absolute bottom-0 right-0 bg-gradient-to-r from-[#9791b7] to-[#cab8cc] rounded-full p-2 text-white hover:shadow">upload</span>
                            </label>
                        </div>
                        <div class="mt-12">
                            <x-text-area class="text-center" name="about" placeholder="About The Organization"
                                required>{{ old('about') }}</x-text-area>
                            <x-input-error :messages="$errors->get('about')" class="mt-2" />
                        </div>
                    </div>
                    <div class="">
                        <div class="mt-4">
                            <x-text-input class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                placeholder="Organization Name" required />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-text-input class="block mt-1 w-full" type="text" name="type" :value="old('type')"
                                placeholder="Select type" required />
                            <x-input-error :messages="$errors->get('type')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-text-input class="block mt-1 w-full" type="address" name="address" :value="old('address')"
                                placeholder="Address" required />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-text-input class="block mt-1 w-full" type="text" name="city" :value="old('city')"
                                placeholder="City" required />
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-text-input class="block mt-1 w-full" type="text" name="state" :value="old('state')"
                                placeholder="State" required />
                            <x-input-error :messages="$errors->get('state')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-text-input class="block mt-1 w-full" type="text" name="zip" :value="old('zip')"
                                placeholder="Zip" required />
                            <x-input-error :messages="$errors->get('zip')" class="mt-2" />
                        </div>
                    </div>
                </div>
                <div class=" mt-4">
                    <x-primary-button class="">{{ __('Next') }}</x-primary-button>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>