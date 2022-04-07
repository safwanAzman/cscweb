<x-form.basic-form action="contactFormSubmit">
    <x-slot name="content">
        <div class="flex flex-col w-full mt-2">
            <div class="mb-4">
                <x-form.input 
                    label="Name"
                    wire:model="name" 
                    value="name" 
                    disable=""  
                    mandatory="" 
                />
            </div>
            <div class="mb-4">
                <x-form.input 
                    label="Email Address"
                    wire:model="email"  
                    value="email" 
                    disable=""  
                    mandatory="" 
                />
            </div>
            <div class="mb-4">    
                <x-form.input 
                    label="Phone Number"
                    wire:model="phone"
                    value="phone" 
                    disable=""  
                    mandatory="" 
                />
            </div>
            <div class="mb-6">
                <x-form.text-area 
                    wire:model="comment"
                    value="comment" 
                    label="Message"
                />
            </div>
            
            <button type="submit" class="px-4 py-2 text-lg font-bold text-white border-2 border-white rounded-lg bg-sky-900 hover:text-orange-300">
                SUBMIT
            </button>
        </div>
    </x-slot>
</x-form.basic-form>
@push('js')
<script>
    window.addEventListener('swal',function(e){Swal.fire(e.detail);});
</script>
@endpush
