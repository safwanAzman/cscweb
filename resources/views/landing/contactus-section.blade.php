<section class="z-50 h-full py-32 bg-gray-100 " id="contactus">
    <div class="grid grid-cols-12 gap-6">
        <div class="container flex flex-col h-full col-span-12 px-5 mx-auto sm:col-span-12 md:col-span-12 lg:col-span-12 xxl:col-span-12 md:px-20" 
            >
            <div class="relative">
                <h1 class="text-3xl myfont md:text-5xl text-sky-900">
                    CONTACT <span class="text-orange-300">US</span>
                </h1>
            </div>
            <div class="mt-10">
                <x-general.grid mobile="1" gap="6" sm="2" md="2" lg="2" xl="2" >
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe 
                                class="w-full h-96 sm:h-[32rem]"
                                id="gmap_canvas" 
                                src="https://maps.google.com/maps?q=Taman%20IKS,%20No.11,%20Jalan%209/6,%20Seksyen%209,%2043650%20Bandar%20Baru%20Bangi,%20Selangor&t=&z=19&ie=UTF8&iwloc=&output=embed" 
                                frameborder="0" 
                                scrolling="no"
                                
                                marginheight="0" 
                                marginwidth="0"
                            >
                            </iframe>
                        </div>
                    </div>
                    <livewire:landing.contact-us>
                </x-general.grid>
            </div>
        </div>
    </div>
</section>