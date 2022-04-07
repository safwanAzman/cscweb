<form {{ $attributes->merge(['class' => ''])}} wire:submit.prevent="{{ $action }}">
    @csrf
    <div>
        {{ $content }}
    </div>
    {{ $slot }}
</form>