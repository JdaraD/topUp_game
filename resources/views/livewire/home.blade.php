<div class="flex flex-col grow gap-4 justify-center items-center w-full h-full lg:mt-27.5 md:mt-27.5 mt-17.5 select-none">
    <div class="relative flex justify-center items-center bg-gray-200/20 lg:h-138.5 md:h-96 h-60 w-full object-cover">
        @foreach ( $bannerTop as $bt )
            <img src="{{ asset('storage/'.$bt->gambar) }}" alt="" class="w-full h-full">
            
        @endforeach
        <div class="flex flex-col gap-1 absolute justify-center items-center lg:h-[88%] md:h-[88%] h-[78%] lg:w-304.75 md:w-304 w-[80%] rounded-2xl">
            <div class="swiper w-full h-full border border-white/20 rounded-2xl">
                <div class="swiper-wrapper">
                    @foreach ( $slideImage as $sie)
                        @if(file_exists(public_path('storage/'. $sie->gambar))) 
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/'. $sie->gambar) }}" class="w-full h-full object-cover rounded-2xl">
                            </div>
                        @else
                            <div class="animate-pulse bg-gray-200 w-full h-full rounded-2xl"></div>
                        @endif
                            
                    @endforeach
                </div>

                        <!-- Optional -->
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <div class="swiper-scrollbar"></div>
            </div> 
        </div>
    </div>
    <div class="flex flex-col justify-center gap-4 items-center h-auto">
        <div class="col-span-full flex flex-col gap-0.5 w-full h-full justify-start">
            <p class="text-white text-md font-semibold">🔥POPULER SEKARANG!</p>
            <p class="pl-4 text-white text-xs">Berikut adalah beberapa produk yang paling populer saat ini.</p>
        </div>
        <div class="grid grid-cols-3 gap-4">
            @for ($f = 0; $f < 7; $f++)
                <a href="" class="flex group bg-[#76b4d9]/60 h-24 w-99 rounded-md cursor-pointer border-2 border-transparent hover:border-[#a58c6f]/90 overflow-hidden">
                    <div class="flex flex-row p-2 gap-2 justify-center items-center">
                        <img src="{{ asset('image/cover.png') }}" alt="" class="group-hover:scale-105 delay-50 ease-in duration-100 h-20 w-20 rounded-md object-cover transition-transform">
                        <div class="flex flex-col gap-1">
                            <p class="text-white text-md">PUBG Mobile</p>
                            <p class="text-white text-xs">Tencent Games</p>
                        </div>
                    </div>
                </a>
            @endfor
        </div>
    </div>
    <div class="flex flex-col justify-center gap-8 items-center h-auto lg:mx-0 md:mx-0 mx-2">

        <ul class="col-span-full flex flex-wrap lg:gap-4 md:gap-4 gap-2 w-full h-full justify-start">
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white lg:text-xs md:text-xs text-[10px] cursor-pointer">Top Up Games</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white lg:text-xs md:text-xs text-[10px] cursor-pointer">Joki MLBB</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white lg:text-xs md:text-xs text-[10px] cursor-pointer">Joki HOK</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white lg:text-xs md:text-xs text-[10px] cursor-pointer">Top Up via LINK</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white lg:text-xs md:text-xs text-[10px] cursor-pointer">Pulsa & Data</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white lg:text-xs md:text-xs text-[10px] cursor-pointer">Voucher</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white lg:text-xs md:text-xs text-[10px] cursor-pointer">Entertaiment</li>
            <li class="flex rounded-md bg-[#373b3f] py-2 px-2 active:bg-[#a58c6f] text-white lg:text-xs md:text-xs text-[10px] cursor-pointer">Tagihan</li>
        </ul>

        <div class="grid grid-cols-6 h-auto items-center gap-6 w-full">
            @foreach ( $games as $game )
                
                <a href="{{ route('top-up', $game->id) }}" class="relative group h-70.5 w-47 rounded-md hover:border-2 hover:border-[#a58c6f]/90 transition delay-50 duration-100 ease-in hover:scale-105 cursor-pointer">
                    <img src="{{ asset('storage/' .$game->gambar) }}" alt="" class="w-full h-full object-cover rounded-md">

                    <div class="absolute group-hover:opacity-100 transition-opacity duration-300 top-0 left-0 right-0 w-full h-full opacity-0 rounded-md bg-gray-900/60">
                        <div class="absolute flex flex-col gap-0.5 bottom-2 left-3 right-0 py-1">
                            <p class="text-white text-md">{{ $game->name }}</p>
                            <p class="text-white text-xs">{{ $game->publisher }}</p>
                        </div>

                    </div>
                </a>
                
            @endforeach
            <div class="col-span-full flex w-full h-full justify-center">
                <button wire:click="" id="btnMore" class="border border-white/20 bg-[#262727] py-2 px-2 rounded-md hover:bg-amber-50/10 transition delay-75 cursor-pointer">
                    <p class="text-white text-xs">Tampilkan Lainya....</p>
                </button>
            </div>

        </div>
    </div>
    <div class="flex w-full lg:h-70 md:h-52 h-16">
        @if (file_exists(public_path('image/bgS.png')))
            <img src="{{ asset('image/bgS.png') }}" alt="" class="w-full h-full object-cover">  
            
        @else
            <div class="w-full h-full animate-pulse bg-gray-200/20"></div>
        @endif
    </div>

</div>
