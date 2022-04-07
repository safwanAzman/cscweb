<header>
    <div class="relative bg-gray-200" x-data="{ showBar: false , isOpen:false}">
        <nav
            class="fixed z-50 w-full px-4 py-4 text-xs font-semibold text-center"
            :class="{ 'bg-sky-900  py-1  shadow transition duration-100' : showBar }"
            @scroll.window="showBar = (window.pageYOffset > 300) ? true : false"
        >
            <!-- desktop header -->
            <div class="hidden lg:block">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center space-x-4">
                        <a href="/">
                            <img src="{{ asset('csc/csclogo3.png') }}" alt="Logo" class="h-12 mr-6">
                        </a>
                        <a href="{{route('about')}}" class="text-base font-bold text-white hover:text-orange-300">ABOUT</a>
                        <a href="/#services" class="text-base font-bold text-white hover:text-orange-300">SERVICES AND PRODUCT</a>
                        <a href="/#contactus" class="text-base font-bold text-white hover:text-orange-300">CONTACT US</a>
                    </div>
                    {{-- <div class="flex items-center space-x-2">
                        <a href="{{route('login')}}" class="w-32 px-4 py-2 text-lg font-bold bg-white border-2 border-white rounded-full text-sky-900 hover:bg-sky-800 hover:text-orange-300">
                            Login
                        </a>
                        <a href="#" class="w-32 px-4 py-2 text-lg font-bold text-white border-2 border-white rounded-full hover:bg-orange-300 hover:text-sky-900">
                            Register
                        </a>
                    </div> --}}
                </div>
            </div>
            <!-- End desktop header -->

            <!-- Start mobile header -->
            <div class="block px-4 lg:hidden">
                <div class="flex items-center justify-between">
                    <a href="/">
                        <img src="{{ asset('csc/csclogo3.png') }}" alt="Logo" class="h-8">
                    </a>
                    <div>
                        <x-heroicon-o-menu-alt-3
                            @click="isOpen = !isOpen" 
                            @keydown.escape="isOpen = false"  
                            class="w-10 h-10 text-white" 
                        />
                    </div>
                </div>
                <div 
                    x-show="isOpen"
                    @click.away="isOpen = false"
                    class="flex flex-col items-center p-4 mt-2 rounded-lg bg-sky-900">
                    <a href="{{route('about')}}" class="mt-4 mb-4 text-sm font-bold text-white hover:text-orange-300"
                        @click="isOpen = false" >
                        ABOUT
                    </a>
                    <a href="/#services" class="mb-4 text-sm font-bold text-white hover:text-orange-300"
                        @click="isOpen = false" >
                        SERVICES AND PRODUCT
                    </a>
                    <a href="/#contactus" class="mb-4 text-sm font-bold text-white hover:text-orange-300"
                        @click="isOpen = false" >
                        CONTACT US
                    </a>
                    {{-- <div class="flex flex-col w-full mt-2">
                        <a href="{{route('login')}}" class="px-4 py-2 mb-2 text-lg font-bold bg-white border-2 border-white rounded-full text-sky-500 hover:bg-sky-800 hover:text-white">
                            Login
                        </a>
                        <a href="#" class="px-4 py-2 text-lg font-bold text-white border-2 border-white rounded-full hover:bg-orange-300">
                            Register
                        </a>
                    </div> --}}
                </div>
            </div>
            <!-- End mobile header -->
        </nav>
    </div>
</header>