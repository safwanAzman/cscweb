<div class="absolute top-0 left-0 right-0 z-0">
    <header {{ $attributes->merge(['class' => '']) }}>
        <div class="w-full bg-cover bg-center" style="height:{{$height}}; background-image: url({{$bgimg}});">
            <div class=" px-8 py-4 h-full w-full bg-indigo-600 bg-opacity-100">
                <!-- Main content header -->
                <div class="">
                    <h1 class="text-4xl font-bold whitespace-nowrap text-white uppercase">{{$title}}</h1>
                </div>
            </div>
        </div>
    </header>
</div>
