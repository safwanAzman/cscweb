<div x-show="{{$modalActive}}" style="display: none;" class="fixed inset-0 z-40 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div
            x-show="{{$modalActive}}"
            {{ $attributes }}
            x-description="Background overlay, show/hide based on modal state."
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 transition-opacity"
        >
            <div class="absolute inset-0 z-40 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-{{ $modalPosition }} sm:h-screen"></span>​
        <div x-show="{{$modalActive}}"
            x-description="Modal panel, show/hide based on modal state."
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="w-full inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:align-{{ $modalPosition }} sm:max-w-sm sm:w-full lg:max-w-xl xl:max-w-{{$modalSize}} my-10"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline"
        >

            <div>
                <div class="pb-4">
                    <div class="relative flex items-center justify-between font-semibold py-2 px-2 mb-4
                        @if(\Request::is('BSE/*'))
                            bg-yellow-300  text-black
                        @else
                            bg-teal-600 text-white
                        @endif">
                        <h3 class="text-lg font-semibold leading-6">
                            <div class="flex items-center text-xs uppercase">
                                {{$title}}
                            </div>
                        </h3>

                        @if ($closeBtn == "yes")
                            <div class="px-1 py-1 bg-red-500 border-2 border-white rounded-full cursor-pointer hover:bg-red-600" @click="{{$modalActive}} = false">
                                <x-heroicon-o-x class="w-4 h-4 font-bold text-white"/>
                            </div>
                        @endif
                    </div>

                    {{$slot}}

                </div>
            </div>
        </div>
    </div>
</div>
