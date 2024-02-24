@props([
    'id' => 'pmodal',
])
<div id="{{ $id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <span data-modal-hide="{{ $id }}"
            class="material-symbols-outlined absolute cursor-pointer text-red-700 right-0 bg-white rounded-full">close</span>
        <!-- Modal content -->
        <div class="relative bg-white rounded-[50px] shadow border-[4px] border-[#8280af] p-6">
            {{ $slot }}
            <!-- Modal footer -->
            <div class=" p-4 md:p-5 ">
                <button data-modal-hide="{{ $id }}" type="button"
                    class="btn btn-gradiant float-end">Close</button>
            </div>
        </div>
    </div>
</div>
