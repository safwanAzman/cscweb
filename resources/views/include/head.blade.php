<!DOCTYPE html>
<html x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="{{asset('img/arrahnu.png')}}"> --}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/form.css')}}" />

    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.4/dist/sweetalert2.min.css">
    <!-- alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
    <script src="{{ asset('js/init-alpine.js')}}"></script>
    <!-- tooltips -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/scale.css"/>
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/themes/light.css"/>
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@4/themes/light.css" />
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@4/themes/light-border.css"/>
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@4/themes/google.css"/>
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@4/themes/translucent.css"/>
    @livewireStyles
</head>
<body class="">
    <div class="flex h-screen " :class="{ 'overflow-hidden': isSideMenuOpen }">
        {{-- @include('pages.loading.main-loading') --}}
        @include('include.sidebar.desktop')
        @include('include.sidebar.mobile')
        
        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            @include('include.sidebar.topbar')
            {{-- @include('include.sidebarArrahnu.mini-topbar') --}}
            <main class="relative z-0 flex-1 px-2 pb-8 md:px-6 sm:h-full ">
                <div class="grid pb-10 mt-4 ">
                    {{-- content --}}
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    @livewireScripts

    <script src="{{ url(mix('js/app.js')) }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        tippy('.tooltipbtn', {
            content:(reference)=>reference.getAttribute('data-title'),
            onMount(instance) {
                instance.popperInstance.setOptions({
                placement :instance.reference.getAttribute('data-placement')
                });
            },
            allowHTML: true,
        });
    </script>
    @stack('js')
</body>
</html>
