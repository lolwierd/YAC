<div class="container">
    <input disabled wire:model="ans" class="border-2 min-w-full min-h-full p-4 text-right">
    <div class="grid grid-cols-3">
        @foreach($keys as $keyText)
            <livewire:button :keyText="$keyText" :wire:key="$keyText" :type="'num'" />
        @endforeach
        @foreach($operations as $keyText)
            <livewire:button :keyText="$keyText" :wire:key="$keyText" :type="'op'" />
        @endforeach
    </div>
</div>
