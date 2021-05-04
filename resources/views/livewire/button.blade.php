<div class="m-2">
    @if($type === "num")
        <button class="hover:border-2 m-4 rounded-md w-full h-full focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent lg:hover:bg-blue-100"
                wire:click="sendNumEvent">{{$keyText}}</button>
    @elseif($type==="op")
        <button class="hover:border-2 m-4 rounded-md w-full h-full focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent lg:hover:bg-red-100"
                wire:click='sendOpEvent'>{{ $keyText }}</button>
    @endif

</div>
