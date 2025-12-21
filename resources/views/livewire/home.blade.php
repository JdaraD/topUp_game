<div class="flex flex-col grow gap-4 justify-center items-center h-full select-none">
    <div class="flex justify-center items-center bg-blue-800 h-138.5 w-full">
        <img src="{{ asset('image/bg.gif') }}" alt="" class="w-full h-full">
        <div class="flex flex-col gap-1 absolute justify-center items-center h-[64%] w-[80%] rounded-2xl z-60">
            @if(file_exists(public_path('image/bg1.gif'))) 
                <div class="swiper w-full h-full border border-white/20 rounded-2xl">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('image/bg.gif') }}" class="w-full h-full object-cover rounded-2xl">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/bg1.gif') }}" class="w-full h-full object-cover rounded-2xl">
                        </div>
                    </div>

                    <!-- Optional -->
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <div class="swiper-scrollbar"></div>
                </div> 
            @else
                <div class="animate-pulse bg-gray-200 w-full h-full rounded-2xl"></div>
            @endif
        </div>
    </div>
    <div class="">
        <p class="h-full">populer game</p>
    </div>
    <div class="flex flex-col justify-center gap-8 w-[80%] h-auto">
        <div class="flex gap-4">
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white text-xs cursor-pointer">Top Up Games</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white text-xs cursor-pointer">Joki MLBB</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white text-xs cursor-pointer">Joki HOK</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white text-xs cursor-pointer">Top Up via LINK</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white text-xs cursor-pointer">Pulsa & Data</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white text-xs cursor-pointer">Voucher</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white text-xs cursor-pointer">Entertaiment</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white text-xs cursor-pointer">Tagihan</li>
        </div>
        <div class="grid grid-cols-6 gap-6">
            @for ($i = 0; $i < 12; $i++)
                <div class="flex h-70.5 w-47 rounded-md hover:border hover:border-[#a58c6f]/90 transition delay-50 duration-100 ease-in hover:scale-105 cursor-pointer">
                    <img src="{{ asset('image/pubg.jpg') }}" alt="" class="w-full h-full object-cover rounded-md">
                </div>
                
            @endfor

        </div>
    </div>
    <div class="">
        <p class="h-full">container slider iklan</p>
    </div>

</div>
