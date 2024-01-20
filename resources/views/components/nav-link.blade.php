@props(['route', 'icon', 'name'])

@php
    $classes = request()->routeIs($route) ?? false ? 'active' : '';
@endphp

<a href="{{ route($route) }}"
    class='text-white me-5 block sm:inline-block mt-3 sm:mt-0 ps-3 sm:ps-0  {{ $classes }}'>
    <span class="material-symbols-outlined text-[40px]">{{ $icon }} </span> <span
        class="text-[30px] sm:hidden align-top ps-2">{{ $name }}</span>
</a>
