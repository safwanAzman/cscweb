<div class="flex flex-col px-4">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            {{ $thead }}
                        </tr>
                    </thead>
                    {{-- <tbody class="bg-white divide-y divide-gray-200"> --}}
                    <tbody {{ $attributes->merge(['class' => 'bg-white divide-y divide-gray-200',]) }}>
                        {{ $tbody }}
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>