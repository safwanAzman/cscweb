<!-- Desktop sidebar -->
<link rel="stylesheet" href="{{ asset('css/sidebar.css')}}" />
<x-sidebar-loading/>
<aside
    x-show="isSideMenuOpenDesktop"
    x-transition:enter="transition ease-in-out duration-300"
    x-transition:enter-start="opacity-0 transform -translate-x-20"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20"
    @keydown.escape="closeSideMenuDesktop"
    class="flex-shrink-0 hidden overflow-y-auto rounded-tr-[25px] rounded-br-[25px] bg-sky-900 md:block " id="sidebar">

    <div class="mb-6 animate" id="nav-items">
        <div>
            <div class="p-2 mx-2 my-5 rounded-md">
                <div class="flex justify-center ">
                    <img src="{{ asset('csc/csclogo3.png') }}" class="w-auto h-8" alt="logo" />
                </div>
            </div>
            <div>
                <ul class="mt-6 leading-10" >
                    <x-sidebar.nav-item title="Dashboard" route="{{route('home')}}" uri="home">
                        <x-heroicon-o-chart-square-bar class="w-8 h-8 ml-6" />
                    </x-sidebar.nav-item>
                    <x-sidebar.nav-item title="Achive" route="#" uri="">
                        <x-heroicon-o-archive class="w-8 h-8 ml-6" />
                    </x-sidebar.nav-item>

                    <x-sidebar.dropdown-nav-item active="1" title="Items" uri="">
                        <x-slot name="icon">
                            <x-heroicon-o-view-boards class="w-8 h-8 ml-6" />
                        </x-slot>
                        <div class="leading-5">
                            <x-sidebar.dropdown-item title="hahahaha" href="#" uri="">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-7 h-7" />
                                </x-slot>
                            </x-sidebar.dropdown-item>
                            <x-sidebar.dropdown-item title="hahahaha" href="#" uri="">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-7 h-7" />
                                </x-slot>
                            </x-sidebar.dropdown-item>
                            <x-sidebar.dropdown-item title="hahahaha" href="#" uri="">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-7 h-7" />
                                </x-slot>
                            </x-sidebar.dropdown-item>
                        </div>
                    </x-sidebar.dropdown-nav-item>
                </ul>
            </div>
        </div>
    </div>

</aside>


