@props(['disabled' => false, 'placeholder' => '', 'rows' => '5'])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-[#eeeef5] rounded-[30px] shadow-sm border-[2px] focus:border-[#8280af] px-4 py-3 placeholder:text-gray-300 w-full resize-none',
]) !!} placeholder="{{ $placeholder }}"
    rows="{{ $rows }}">{{ $slot }}</textarea>
