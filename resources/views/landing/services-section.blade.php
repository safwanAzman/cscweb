<div x-data="{selected:null}">
    <section class="z-0 h-full py-32" id="services" >
        <div class="grid grid-cols-12 gap-6">
            <div class="container flex flex-col h-full col-span-12 px-5 mx-auto sm:col-span-12 md:col-span-12 lg:col-span-12 xxl:col-span-12 md:px-20" >
                <div class="relative">
                    <h1 class="text-3xl myfont md:text-5xl text-sky-800">
                        SERVICES <span class="text-orange-300 ">&</span> PRODUCT
                    </h1>
                </div>
                <div class="flex flex-col items-center justify-center w-full mt-10">
                    <x-general.grid mobile="1" gap="6" sm="3" md="3" lg="3" xl="3" class="mt-5">
                        <a href="http://www.csc.net.my/crems/login.php" target="_blank" class="p-4 bg-orange-300 border-2 rounded-lg shadow-lg shadow-orange-400/50 hover:skew-y-6">
                            <img src="{{asset('csc/img-1.png')}}" alt="" class="">
                            <p class="text-2xl font-semibold text-white">SUPPORT</p>
                        </a>
                        <div class="p-4 bg-white rounded-lg shadow-lg shadow-black/50 hover:skew-y-6"
                            @click="selected !== 1 ? selected = 1 : selected = null">
                            <img src="{{asset('csc/img-2.png')}}" alt="" class="">
                            <p class="text-2xl font-semibold text-sky-900">SERVICES</p>
                        </div>
                        <div class="p-4 rounded-lg shadow-lg bg-sky-900 shadow-sky-500/50 hover:skew-y-6"
                            @click="selected !== 2 ? selected = 2 : selected = null">
                            <img src="{{asset('csc/img-3.png')}}" alt="" class="">
                            <p class="text-2xl font-semibold text-white">CUSTOMER</p>
                        </div>
                    </x-general.grid>
                </div>
            </div>
        </div>
    </section>

    <!--start services -->
    <div 
        :class="selected == 1 ? 'animate__animated animate__fadeInUpBig'  : 'hidden' " 
        class="fixed inset-0 z-50">
        <div class="fixed inset-0 overflow-y-auto">
            <x-general.grid mobile="1" gap="0" sm="1" md="2" lg="2" xl="2" class="relative">
                <div class="px-4 py-4 pb-10 bg-orange-300 ">
                    <div class="sticky top-0 flex justify-start w-full py-4 cursor-pointer"
                        @click="selected = null">
                        <div class="flex items-center w-12 h-12 p-2 rounded-md bg-sky-800">
                            <x-heroicon-o-x class="w-8 h-8 font-bold text-white " />
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start h-full -mt-24 md:h-screen md:justify-center">
                        <img src="{{asset('csc/img-2.png')}}" alt="" class="w-auto h-64 md:h-[30rem]">
                        <p class="text-2xl font-bold text-white md:text-5xl">Services & Products </p>
                    </div>
                </div>
                <div class="h-full bg-white ">
                    <div class="px-10 py-10">
                        <div class="mb-20">
                            <p class="mb-4 text-3xl font-bold md:text-4xl text-sky-800">Services</p>
                            <ul class="ml-10 list-disc">
                                <li class="mb-1 text-xl md:text-2xl">Project Management</li>
                                <li class="mb-1 text-xl md:text-2xl">System Integration Provider</li>
                                <li class="mb-1 text-xl md:text-2xl">Software Development</li>
                                <li class="mb-1 text-xl md:text-2xl">Data Warehouse and EIS</li>
                                <li class="mb-1 text-xl md:text-2xl">Document Image Processing</li>
                                <li class="mb-1 text-xl md:text-2xl">Internet Services</li>
                                <li class="mb-1 text-xl md:text-2xl">Web-based Document Management System</li>
                                <li class="mb-1 ttext-xl md:text-2xl">Credit Scoring System</li>
                            </ul>
                        </div>
                        <div>
                            <p class="mb-4 text-3xl font-bold md:text-4xl text-sky-800">Sofware Products</p>
                            <ul class="ml-10 list-disc">
                                <li class="mb-1 text-xl md:text-2xl"><strong class="text-sky-900">CIBS</strong> Islamic Banking/Fiancing System</li>
                                <li class="mb-1 text-xl md:text-2xl"><strong class="text-sky-900">CNS2000</strong> Custodian & Nominees Management</li>
                                <li class="mb-1 text-xl md:text-2xl"><strong class="text-sky-900">TMS2000</strong> Trustee Management System</li>
                                <li class="mb-1 text-xl md:text-2xl"><strong class="text-sky-900">SIM2020</strong> Shares Investment Management System</li>
                                <li class="mb-1 text-xl md:text-2xl"><strong class="text-sky-900">EIS</strong> Executive Information System</li>
                                <li class="mb-1 text-xl md:text-2xl"><strong class="text-sky-900">CIF</strong> Customer Information System</li>
                                <li class="mb-1 text-xl md:text-2xl"><strong class="text-sky-900">I-Fund</strong> Fund Mangement System</li>
                                <li class="mb-1 text-xl md:text-2xl"><strong class="text-sky-900">CSC-HRP</strong> Human-Resource and Payroll System</li>
                                <li class="mb-1 text-xl md:text-2xl"><strong class="text-sky-900">SPFiling</strong> Filing Management System</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </x-general.grid>
        </div>
    </div>
    <!-- end services -->

    <!--start Customer -->
    <div 
        :class="selected == 2 ? 'animate__animated animate__fadeInUpBig '  : 'hidden' " 
        class="fixed inset-0 z-50 overflow-y-auto">
        <div class="fixed inset-0 ">
            <x-general.grid mobile="1" gap="0" sm="1" md="2" lg="2" xl="2">
                <div class="px-4 py-4 pb-10 bg-sky-800 ">
                    <div class="flex justify-start w-full cursor-pointer"
                        @click="selected = null">
                        <div class="flex items-center w-12 h-12 p-2 bg-orange-300 rounded-md">
                            <x-heroicon-o-x class="w-8 h-8 font-bold text-white " />
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start h-full md:h-screen md:justify-center">
                        <img src="{{asset('csc/img-3.png')}}" alt="" class="w-auto h-64 md:h-[30rem]">
                        <p class="text-2xl font-bold text-white md:text-5xl">Our Customers</p>
                    </div>
                </div>
                <div class="h-full bg-white">
                    <div class="px-10 pt-12 pb-20">
                        <div class="flex items-center justify-center h-full md:h-screen">
                            <img src="{{ asset('csc/ourCustomer.png') }}" alt="Logo" class="w-auto h-96 md:h-[30rem]">
                        </div>
                    </div>
                </div>
            </x-general.grid>
        </div>
    </div>
    <!-- end Customer -->

</div>
