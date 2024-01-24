<x-guest-layout>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="mx-auto max-w-[400px]" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-5xl text-center mb-5 sm:mb-10 text-[#8280af]" style="font-family: 'EB Garamond', serif">Welcome
        </div>

        <div class=" text-2xl font-extrabold">{{ __('Sign In') }}</div>
        <!-- Email Address -->
        <div class="mt-4 pt-2">
            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')"
                placeholder="Enter Email" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 pt-2">

            <x-text-input id="password" class="block w-full" type="password" name="password" required
                autocomplete="current-password" placeholder="Enter Password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class=" mt-4 pt-2">
            @if (Route::has('password.request'))
                <div class="text-end">
                    <a class="text-lg font-bold text-gray-800 hover:text-gray-900 "
                        href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                </div>
            @endif

            <x-primary-button> {{ __('Sign in') }}</x-primary-button>
        </div>
    </form>
</x-guest-layout>
