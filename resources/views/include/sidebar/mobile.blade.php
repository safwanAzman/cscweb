    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div
        x-cloak
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-white border-2 bg-opacity-50 sm:items-center sm:justify-center"
    ></div>

    <aside
        x-cloak
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 overflow-y-auto bg-white border-r-2 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
    >


    <div class="mb-6 animate">
        <div>
            <div class="p-2 my-2 rounded-md mx-2">
                <div class="flex justify-center ">
                    <img src="https://www.freepnglogos.com/uploads/red-logo-png-16.png" class="w-16 h-16" alt="logo" />
                </div>
            </div>
            <div>
                <ul class="mt-6 leading-10">
                    <x-sidebar.nav-item title="Dashboard" route="#" uri="home">
                        <x-heroicon-o-chart-square-bar class="w-8 h-8 ml-6" />
                    </x-sidebar.nav-item>
                    <x-sidebar.nav-item title="Achive" route="#" uri="">
                        <x-heroicon-o-archive class="w-8 h-8 ml-6" />
                    </x-sidebar.nav-item>
                    <x-sidebar.dropdown-nav-item active="open" title="Items" uri="">
                        <x-slot name="icon">
                            <x-heroicon-o-view-boards class="w-8 h-8 ml-6" />
                        </x-slot>
                        <div class="leading-5">
                            <x-sidebar.dropdown-item title="Items" href="#" uri="">
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
