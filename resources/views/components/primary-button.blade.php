<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'btn w-full mt-4 p-2 sm:p-4 bg-gradient-to-r from-[#9791b7] to-[#cab8cc] border-0 text-white text-xl shadow-sm hover:shadow-md hover:bg-gradient-to-l']) }}>
    {{ $slot }}
</button>
