<th {{ $attributes->merge(['class' => 'px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider']) }}
    {{ $livewire }}
>
    @if($sort == 'yes')
        <div class="flex cursor-pointer">
            <span class="mr-2">{{ $value }}</span>
            @if ($direction === 'asc')
                <span><x-heroicon-o-chevron-up class="h-4 w-4"/></span>
            @elseif ($direction === 'desc')
                <span><x-heroicon-o-chevron-down class="h-4 w-4"/></span>
            @else
                {{-- <span><x-heroicon-o-selector class="h-4 w-4"/></span> --}}
            @endif
            </span>
        </div>
    @else
        {{ $value }}
    @endif
</th>