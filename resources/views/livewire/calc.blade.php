<div class=container">
    <input disabled wire:model="ans" class="border-2 min-w-full h-16 p-8 text-right text-2xl bg-blue-100">
    <div class="grid grid-cols-4 ">
        @foreach($keys as $keyText)
            <livewire:button :keyText="$keyText" :wire:key="$keyText" :type="'num'" />
        @endforeach
        @foreach($operations as $keyText)
            <livewire:button :keyText="$keyText" :wire:key="$keyText" :type="'op'" />
        @endforeach
    </div>
</div>
