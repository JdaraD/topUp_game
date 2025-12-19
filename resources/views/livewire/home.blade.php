<div class="flex flex-col grow h-full">
    <div class="flex justify-center items-center bg-blue-800 h-138.5 w-full">
        <img src="{{ asset('image/bg.gif') }}" alt="" class="w-full h-full">
        <div class="flex flex-col gap-1 absolute justify-center items-center h-[64%] w-[80%] rounded-2xl z-60">
            {{-- <div class="animate-pulse bg-gray-200 w-full h-full rounded-2xl"></div> --}}
            @if(file_exists(public_path('image/bg1.gif'))) 
                <img src="{{ asset('image/bg1.gif') }}" alt="" class="w-full h-full rounded-2xl">
            @else
                <div class="animate-pulse bg-gray-200 w-full h-full rounded-2xl"></div>
            @endif
        </div>
    </div>
    <div class="">
        <p class="h-full">populer game</p>
    </div>
    <div class="">
        <p class="h-full">container game</p>
    </div>
    <div class="">
        <p class="h-full">container slider iklan</p>
    </div>

</div>
