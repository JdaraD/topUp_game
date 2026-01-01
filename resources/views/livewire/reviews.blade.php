<div class="flex flex-col grow gap-4 justify-center items-center w-full h-full mt-27.5 select-none">
    <div class="flex flex-col gap-4 justify-center items-center h-auto w-[80%]">
        <div class="flex flex-col gap-4 justify-center w-full h-full items-center my-24">
            <div class="flex flex-col gap-2 justify-center items-center w-[50%] h-auto text-center">
                <p class="text-[#b09873] text-lg font-bold">Ulasan</p>
                <h2 class="text-white font-bold text-3xl">Terima kasih kepada semua pelanggan yang memberikan ulasan dan penilaian kepada kami.</h2>

            </div>

        </div>

        <div class="grid grid-cols-3 h-auto justify-center items-center place-items-center gap-6 w-full">
            @for ($i = 0; $i < 7; $i++)
                <div class="flex w-98.75 justify-center items-center h-42 bg-[#212121] rounded-md shadow-lg">
                    <div class="flex flex-col h-full justify-center w-full px-6 py-4 gap-2">
                        <p class="text-white text-sm font-bold">PUBG Mobile</p>
                        <p class="text-white text-sm">prosesnya cepet banget</p>
                        <div class="flex justify-between">
                            <p class="text-white text-sm">name</p>
                            <div class="flex">
                                @for ($z = 1; $z <= 5; $z++)
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                    </svg>
                                @endfor

                            </div>
                        </div>
                        <div class="flex justify-between">
                            <p class="text-white text-xs">kategori pembelian</p>
                            <p class="text-white text-xs">10-01-2026 16:59:19</p>
                        </div>

                    </div>
                </div>
                
            @endfor
            <div class="col-span-full flex w-full h-full justify-center">
                <button wire:click="" id="btnMore" class="border border-white/20 bg-[#262727] py-2 px-2 rounded-md hover:bg-amber-50/10 transition delay-75 cursor-pointer">
                    <p class="text-white text-xs">Tampilkan Lainya....</p>
                </button>
            </div>

        </div>
    </div>
    <div class="flex w-full h-70">
        @if (file_exists(public_path('image/bgS.png')))
            <img src="{{ asset('image/bgS.png') }}" alt="" class="w-full h-full object-cover">  
            
        @else
            <div class="w-full h-full animate-pulse bg-gray-200/20"></div>
        @endif
    </div>
</div>