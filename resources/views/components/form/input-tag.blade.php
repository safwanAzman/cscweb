@props([
    'disable' => 'false',
    'label' => '',
    'type' => 'text',
    'value' => '',
])

<div>
    @if($label != "")
        <label class="block text-sm font-semibold leading-5 text-gray-700 {{ ($errors->has($value)) ? 'text-red-700' : ''}}">
            {{ $label }}
            <span class="text-lg text-red-500">{{ $mandatory == "true" ? '*' : '' }}</span>
        </label>
    @endif
    <div class="relative flex mt-1 mb-2 rounded-md shadow-sm">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <span class="text-gray-500 sm:text-sm">
                {{$leftTag}}
            </span>
        </div>
            <input 
                {{ $disable == "true" ? 'disabled' : '' }}
                type="{{ $type }}" {{ $attributes }} value="{{$value}}"
                class="form-input text-sm block w-full transition duration-150 ease-in-out sm:leading-5 
                rounded-lg border-gray-300
                @if ($leftTag != "")
                pl-9
                @else
                pl-2
                @endif
                {{ ($disable == 'true') ? 'bg-gray-200' : '' }} 
                {{ ($errors->has($value)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}"
            >
        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <span class="text-gray-500 sm:text-sm">
                {{$rightTag}}
            </span>
        </div>
    </div>
    @if($errors->has($value)) <p class="text-sm text-red-600">{{ $errors->first($value) }}</p> @endif
</div>