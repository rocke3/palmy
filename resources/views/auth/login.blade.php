<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="mx-auto max-w-96" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-5xl text-center mb-10 text-[#8280af]">Welcome</div>

        <div class=" text-2xl font-extrabold mb-4">Sign In</div>
        <!-- Email Address -->
        <div>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class=" mt-4">
            @if (Route::has('password.request'))
                <div class="text-end">
                    <a class="font-bold text-gray-800 hover:text-gray-900 " href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
            @endif

            <button class="btn w-full mt-4 btn-primary"> {{ __('Log in') }}</button>
        </div>
    </form>
</x-guest-layout>
