<nav x-data="{ open: false }" class="bg-gradient-to-r from-[#8280af] to-[#c3b2ca]">
    <!-- Primary Navigation Menu -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="/img/logo.png" alt="logo" class="h-9">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex relative">
                    <form action="" method="">
                        <input type="text" name='search' class="p-2 h-[40px] mt-3 rounded-full">
                        <button class=" absolute right-2 top-5"><span
                                class="material-symbols-outlined">search</span></button>
                    </form>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-nav-link route="dashboard" icon="home" name="Home"></x-nav-link>
                <x-nav-link route="profile.edit" icon="favorite" name="Home"></x-nav-link>
                <x-nav-link route="profile.edit" icon="settings" name="Home"></x-nav-link>
                <x-nav-link route="profile.edit" icon="notifications_active" name="Home"></x-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button><span class="material-symbols-outlined text-[40px] text-white">logout</span></button>
                </form>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-dar  transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden mt-5">
        <x-nav-link route="dashboard" icon="home" name="Home"></x-nav-link>
        <x-nav-link route="profile.edit" icon="favorite" name="Favorite"></x-nav-link>
        <x-nav-link route="profile.edit" icon="settings" name="Settings"></x-nav-link>
        <x-nav-link route="profile.edit" icon="notifications_active" name="Notifications"></x-nav-link>
        <form method="POST" action="{{ route('logout') }}" class="pt-4">
            @csrf
            <button><span class="material-symbols-outlined text-[40px] text-white mb-5 ps-3">logout</span> <span
                    class="text-white text-[30px] sm:hidden align-top ps-2">Log Out</span></button>
        </form>
    </div>
</nav>
