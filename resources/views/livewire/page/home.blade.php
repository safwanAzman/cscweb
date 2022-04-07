<div class="">
    <h1 class="text-2xl font-bold">Dashboard</h1>
    <div>
        <x-general.grid mobile="1" gap="6" sm="2" md="2" lg="4" xl="4" class="col-span-6">
            <div class="p-4 bg-white border-2 rounded-lg shadow-md shadow-blue-500/50">
                <div class="flex">
                    <div class="flex items-center p-4 bg-blue-500 rounded-lg shadow-lg shadow-blue-500/50">
                        <x-heroicon-o-information-circle class="w-8 h-8 text-white"/>
                    </div>
                </div>
                <p class="pt-4 text-xl font-bold">RM 200</p>
                <p class="text-base font-semibold text-gray-400">50% this week</p>
            </div>
            <div class="p-4 bg-white border-2 rounded-lg shadow-md shadow-yellow-500/50">
                <div class="flex">
                    <div class="flex items-center p-4 bg-yellow-500 rounded-lg shadow-lg shadow-yellow-500/50">
                        <x-heroicon-o-information-circle class="w-8 h-8 text-white"/>
                    </div>
                </div>
                <p class="pt-4 text-xl font-bold">RM 200</p>
                <p class="text-base font-semibold text-gray-400">50% this week</p>
            </div>
            <div class="p-4 bg-white border-2 rounded-lg shadow-md shadow-green-500/50">
                <div class="flex">
                    <div class="flex items-center p-4 bg-green-500 rounded-lg shadow-lg shadow-green-500/50">
                        <x-heroicon-o-information-circle class="w-8 h-8 text-white"/>
                    </div>
                </div>
                <p class="pt-4 text-xl font-bold">RM 200</p>
                <p class="text-base font-semibold text-gray-400">50% this week</p>
            </div>
            <div class="p-4 bg-white border-2 rounded-lg shadow-md shadow-pink-500/50"">
                <div class="flex">
                    <div class="flex items-center p-4 bg-pink-500 rounded-lg shadow-lg shadow-pink-500/50">
                        <x-heroicon-o-information-circle class="w-8 h-8 text-white"/>
                    </div>
                </div>
                <p class="pt-4 text-xl font-bold">RM 200</p>
                <p class="text-base font-semibold text-gray-400">50% this week</p>
            </div>
        </x-general.grid>

        {{-- <! -- start table -->
        <div class="mt-10"> 
            <x-table.table>
                <x-slot name="thead">
                    <x-table.table-header class="text-left" value="Items" sort="" />
                    <x-table.table-header class="text-left" value="Amount(RM)" sort="" />
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <x-table.table-body colspan="" class="text-sm font-medium text-left text-gray-700">
                            test
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-sm font-medium text-left text-gray-700">
                            test
                        </x-table.table-body>
                    </tr>
                </x-slot>
            </x-table.table>
        </div>
        <! -- end table -->

        <! -- start form input -->
        <div class="mt-10"> 
            <div div x-max="1" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
                <x-form.input 
                    label="input text" 
                    value="" 
                    disable=""  
                    mandatory="" 
                />
                <x-form.input-tag 
                    label="input tag text" 
                    leftTag="RM" 
                    rightTag="%" 
                    value=""  
                    disable=""  
                />
                <x-form.dropdown 
                    label="dropdown input" 
                    value="" 
                    default="yes" 
                >
                    <option value="">test</option>
                </x-form.dropdown>
                <x-form.text-area 
                    value="" 
                    label="Textarea" 
                />
            </div>
        </div>
        <! -- end form input --> --}}
        
    </div>
</div>