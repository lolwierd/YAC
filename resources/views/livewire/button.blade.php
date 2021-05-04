<div class="m-2">
    @if($type === "num")
        <button class="border-2 m-4 rounded-md w-full h-full" wire:click="sendNumEvent">{{$keyText}}</button>
    @elseif($type==="op")
        <button class="border-2 m-4 rounded-md w-full h-full" wire:click='sendOpEvent'>{{ $keyText }}</button>
    @endif

</div>
