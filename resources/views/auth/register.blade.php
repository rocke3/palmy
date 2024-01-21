<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class=" text-center font-extrabold text-2xl">
            Select Your Role
        </div>

        <div class="md:flex md:flex-row font-extrabold text-md">
            <div class="md:w-[40%] md:me-2">
                <label class="w-full border p-1 inline-block rounded-lg p-2  mt-4">
                    <span
                        class="material-symbols-outlined p-3 bg-slate-200 rounded-full text-[#9b96bb]">volunteer_activism</span>
                    <span class="ms-2 align-top">Doner</span>
                    <input class="float-end" type="radio" name="group" value="0" required>
                </label>
            </div>
            <div class="md:w-[60%]">
                <label class="w-full border p-1 inline-block rounded-lg p-2  mt-4">
                    <span class="material-symbols-outlined p-3 bg-slate-200 rounded-full text-[#9b96bb]">
                        group
                    </span>
                    <span class="ms-2 align-top">Organization/Group</span>
                    <input class="float-end" type="radio" name="group" value="1" required>
                </label>
            </div>

        </div>
        <x-input-error :messages="$errors->get('group')" class="mt-2" />

        <div class="mx-auto max-w-[400px] mt-4">
            <div class=" text-2xl font-extrabold">{{ __('Sign Up') }}</div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" placeholder="Enter Your Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" placeholder="Enter Password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" placeholder="Re-Enter Password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="mt-4">

                <label>
                    <input type="checkbox" name="accept" required>
                    {{ __('By clicking this, you agree to the') }} <a href="#" class="font-bold">Terms &
                        Conditions</a> and <a href="#" class="font-bold">Privacy Policy</a>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3">{{ __('Sign Up') }}</x-primary-button>
            </div>
        </div>


    </form>
</x-guest-layout>
