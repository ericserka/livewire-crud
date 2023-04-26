@props(['size', 'close_btn'])
@php
    $size_class = [
        'sm' => 'max-w-sm',
        'md' => 'max-w-md',
        'lg' => 'max-w-lg',
        'xl' => 'max-w-xl',
        '2xl' => 'max-w-2xl',
        'full' => 'w-full m-1',
    ][$size ?? '2xl'];
    
@endphp
<div x-data="{ show: false }" @toggle-modal.window="show = $event.detail.show; console.log((new Date()).toISOString())">
    <div x-cloak x-show="show" class="relative z-10">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed z-10 inset-0">
            <div class="flex items-center justify-center h-full p-4 text-center ">
                <div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all my-8 {{ $size_class }}"
                    @click.outside="show = false">
                    <div class="bg-white p-1">
                        <div class="mx-auto flex items-center justify-center rounded-full bg-gray-300  m-1">
                            <span class="ml-2 text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                {{ $title }}
                            </span>
                        </div>
                        <div class="my-3 text-center">
                            {{ $slot }}
                        </div>
                    </div>
                    <div x-data="{ show: {{ $close_btn ?? 'true' }} }" x-cloak x-show="show" class="bg-gray-50 px-4 py-3">
                        <button type="button"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            @click=" show = false">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
