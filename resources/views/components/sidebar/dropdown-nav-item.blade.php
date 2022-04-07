<li class="px-2 py-2">

    <! -- start desktop -->
    <div class="hidden md:block">
        <div class="flex space-x-8">
            <a  
                class="hover:text-primary inline-flex items-center font-semibold uppercase cursor-pointer dropdown-nav-item
                @if(Route::current()->uri == $uri)
                    text-primary 
                @else
                    text-white
                @endif""
                nav-title="<p class='p-1 text-lg font-semibold text-primary'>{{$title}}</p>"
                data-placement="right" href="#" 
                x-on:click="opendropdownitem !== {{$active}} ? opendropdownitem = {{$active}} : opendropdownitem = null"
                >
                {{ $icon }}
            </a>
            @if(Route::current()->uri == $uri)
                <div class="absolute top-0 left-0 w-1 h-10 mt-1 bg-primary"></div>
            @endif

            <span
                class="absolute left-[40px] z-50"
                x-show="opendropdownitem == {{$active}}" 
                x-cloak
                >
                <ul 
                    class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium rounded-md shadow-inner bg-primary "
                    aria-label="submenu">
                    {{$slot}}

                </ul>
            </span>
        </div>
    </div>
    <! -- end desktop -->

    <! -- start mobile -->
    <div class="block md:hidden">
        <div x-data="{ {{$active}} : false}">
            <div 
                class="inline-flex items-center justify-between w-full text-base font-semibold  
                cursor-pointer 
                @if(\Request::is($uri))
                    text-primary
                @else
                    text-white 
                @endif"
                x-on:click="{{$active}} = !{{$active}}">
                <a href="#" class="inline-flex items-center text-sm font-semibold">
                    {{ $icon }}
                    <span class="ml-4 uppercase">{{$title}}</span>
                </a>
                    <x-heroicon-o-chevron-left x-show="!{{$active}}" class="w-4 h-4 ml-1"  style="display: none;"/>
                    <x-heroicon-o-chevron-down x-show="{{$active}}" class="w-4 h-4 ml-1"  style="display: none;"/>
            </div>

            <span x-show.transition="{{$active}}" x-cloak>
                <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0"
                    x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300"
                    x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                    class="p-2 mx-4 mt-2 space-y-2 overflow-hidden text-sm font-medium rounded-md shadow-inner bg-primary"
                    aria-label="submenu">
        
                    {{$slot}}
                    
        
                </ul>
            </span>
        </div>
    </div>
    <! -- end mobile -->

</li>
@push('js')
<script>
    tippy('.dropdown-nav-item', {
        content: (reference)=>reference.getAttribute('nav-title'),
        onMount(instance) {
            instance.popperInstance.setOptions({
            placement :instance.reference.getAttribute('data-placement')
            });
        },
        allowHTML: true,
        theme: 'light',
        animation: 'scale',
    });
</script>
@endpush