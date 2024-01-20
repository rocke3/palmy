@props(['disabled' => false, 'placeholder' => ''])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-[#eeeef5] rounded-full shadow-sm border-[2px] focus:border-[#8280af] px-4 py-3 placeholder:text-gray-300',
]) !!} placeholder="{{ $placeholder }}">
