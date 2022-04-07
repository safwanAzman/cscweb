
<li class="relative px-2 py-2 ">
    <!-- start desktop-->
    <div class="hidden md:block">
        <a  onclick="loading()" class="hover:text-primary inline-flex items-center font-semibold uppercase cursor-pointer nav-item 
            @if(Route::current()->uri == $uri)
                text-primary
            @else
                text-white
            @endif"
            href="{{$route}}"
            nav-title="<p class='p-1 text-lg font-semibold text-primary'>{{$title}}</p>"
            data-placement="right">
            {{$slot}}
        </a>
        @if(Route::current()->uri == $uri)
            <div class="absolute top-0 left-0 w-1 h-10 mt-1 bg-primary"></div>
        @endif
    </div>
    <!-- end desktop -->

    <!--start mobile-->
    <div class="block md:hidden">
        <a  onclick="loading()" class="inline-flex items-center w-full text-sm font-semibold uppercase  cursor-pointer 
        @if(Route::current()->uri == $uri)
        text-primary
        @else
        text-gray-600
        @endif" href="{{$route}}">
        {{$slot}}
        <span class="ml-4 hide">{{$title}}</span>
    </a>
        @if(Route::current()->uri == $uri)
            <div class="absolute top-0 left-0 w-1 h-10 mt-1 bg-primary"></div>
        @endif
    </div>
    <!-- end mobile -->
</li>
@push('js')
<script>
    tippy('.nav-item', {
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
