<div class="flex flex-col grow gap-4 justify-center items-center w-full h-full lg:mt-27.5 md:mt-27.5 mt-17 select-none">
    <div class="flex flex-col w-full h-full justify-center items-center">
        <div class="flex justify-center items-center bg-gray-200/20 lg:h-91 md:h-91 h-64 w-full object-cover">
            <img src="{{ asset('storage/'. $games->banner) }}" alt="" class="w-full h-full object-cover">
        </div>

        <div class="flex relative bg-linear-to-r from-[#1c1f22] to-[#2a2f34] justify-center items-center lg:h-[160.8px] md:h-[160.8px] h-28 w-full">
            <div class="flex relative gap-4 lg:h-[160.8px] md:h-[160.8px] h-28 lg:w-[80%] md:w-[80%] w-[96%]">
                    
                <div class="relative h-full w-[211.92px] perspective-[1000px]">
                    <div class="absolute bottom-10 lg:h-52 md:h-52 h-27.5 lg:w-48 md:w-48 w-24 transform-3d transform-[rotateY(25deg)_rotateX(0deg)_translateZ(15px)] rounded-xl overflow-hidden shadow-[0_30px_60px_-15px_rgba(0,0,0,0.8)]">
                        <img src="{{ asset('storage/'. $games->gambar) }}" class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="flex flex-col relative justify-center lg:gap-5 md:gap-5 gap-3 h-full w-fit">
                    <div class="flex flex-col gap-2">
                        <p class="text-white lg:text-lg md:text-lg text-sm">{{ $games->name }}</p>
                        <p class="text-white lg:text-sm md:text-sm text-xs">{{ $games->publisher }}</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="icon text-[#fade57] icon-tabler icons-tabler-filled icon-tabler-bolt">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M13 2l.018 .001l.016 .001l.083 .005l.011 .002h.011l.038 .009l.052 .008l.016 .006l.011 .001l.029 .011l.052 .014l.019 .009l.015 .004l.028 .014l.04 .017l.021 .012l.022 .01l.023 .015l.031 .017l.034 .024l.018 .011l.013 .012l.024 .017l.038 .034l.022 .017l.008 .01l.014 .012l.036 .041l.026 .027l.006 .009c.12 .147 .196 .322 .218 .513l.001 .012l.002 .041l.004 .064v6h5a1 1 0 0 1 .868 1.497l-.06 .091l-8 11c-.568 .783 -1.808 .38 -1.808 -.588v-6h-5a1 1 0 0 1 -.868 -1.497l.06 -.091l8 -11l.01 -.013l.018 -.024l.033 -.038l.018 -.022l.009 -.008l.013 -.014l.04 -.036l.028 -.026l.008 -.006a1 1 0 0 1 .402 -.199l.011 -.001l.027 -.005l.074 -.013l.011 -.001l.041 -.002z" />
                            </svg>
                            <p class="text-white lg:text-sm md:text-sm text-xs">Proses Cepat</p>
                        </div>
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="icon text-[#6266f0] icon-tabler icons-tabler-filled icon-tabler-message">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 3a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-4.724l-4.762 2.857a1 1 0 0 1 -1.508 -.743l-.006 -.114v-2h-1a4 4 0 0 1 -3.995 -3.8l-.005 -.2v-8a4 4 0 0 1 4 -4zm-4 9h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0 -2m2 -4h-8a1 1 0 1 0 0 2h8a1 1 0 0 0 0 -2" />
                            </svg>
                            <p class="text-white lg:text-sm md:text-sm text-xs">Layanan Chat 24/7</p>
                        </div>
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="icon text-[#6266f0] icon-tabler icons-tabler-filled icon-tabler-circle-check">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" />
                            </svg>
                            <p class="text-white lg:text-sm md:text-sm text-xs">Pembayaran Aman!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 relative lg:my-8 md:my-8 my-4 lg:gap-8 md:gap-8 gap-2 h-auto lg:w-[80%] md:w-[80%] w-[96%]">
            <form wire:submit.prevent="submit" class="col-span-3 grid grid-cols-3 relative gap-4 h-auto w-full">
                <div class="lg:col-span-2 md:col-span-2 col-span-3 lg:gap-8 md:gap-8 gap-2 flex flex-col h-auto w-full">

                    <div class="flex flex-col h-auto w-full lg:col-span-2 md:col-span-2 col-span-3 shadow-lg">
                        <div class="flex h-10 w-full items-center bg-[#5f666d] rounded-t-lg">
                            <div class="flex h-full w-10 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                                <p class="lg:text-base md:text-base text-sm text-white">1</p>
                            </div>
                            <p class="lg:text-sm md:text-sm text-xs text-white pl-4">Masukkan Data Akun</p>
                        </div>
                        <div class="flex flex-row justify-center items-center px-4 pb-4 pt-5 gap-4 h-fit w-full bg-[#434649] rounded-b-lg">
                            <div class="flex flex-col w-full">
                                <label for="Mid" class="text-white lg:text-sm md:text-sm text-xs">ID</label>
                                <input type="text" wire:model="Mid" id="Mid" class="w-full h-8.5 lg:text-sm md:text-sm text-xs bg-[#5f666d] rounded-md mt-2.5 px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan ID Akun Anda">
                            </div>
                            <div class="flex flex-col w-full">
                                <label for="server" class="text-white lg:text-sm md:text-sm text-xs">server</label>
                                <input type="text" wire:model="server" id="server" class="w-full h-8.5 lg:text-sm md:text-sm text-xs lg:placeholder:text-sm md:placeholder:text-sm placeholder:text-xs bg-[#5f666d] rounded-md mt-2.5 px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan server">
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col h-full w-full lg:col-span-2 md:col-span-2 col-span-3 shadow-lg">
                        <div class="flex h-10 min-h-10 shrink-0 w-full items-center bg-[#5f666d] rounded-t-lg">
                            <div class="flex h-full w-10 shrink-0 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                                <p class="lg:text-base md:text-base text-xs text-white">2</p>
                            </div>
                            <p class="lg:text-sm md:text-sm text-xs text-white pl-4">Pilih Nominal</p>
                        </div>

                        <div class="flex flex-col h-full w-full py-4 gap-2 bg-[#434649] rounded-b-lg">
                            @foreach ( $games->priceGames->groupBy('name') as $name => $prices)
                            
                            <div class="flex flex-col h-full w-full gap-2">
                                <p class="text-sm text-white px-4">{{ $name }}✨</p>
                                
                                <div class="flex flex-wrap h-full w-full items-center px-4 lg:gap-4 md:gap-4 gap-2">
                                    @foreach ($prices as $price )
                                    
                                        <div wire:click="selectPrice({{ $price->id }})" @class(['ring-2 ring-amber-400' => $selectedPrice?->id === $price->id, 'flex flex-col rounded-lg lg:w-61 md:w-61 w-41.5 h-auto bg-[#5f666d] shadow-lg cursor-pointer transition' ]) class="flex flex-col rounded-lg lg:w-61 md:w-61 w-41.5 h-auto bg-[#5f666d] shadow-lg cursor-pointer">
                                            <div class="flex flex-col justify-center w-auto h-auto px-2 gap-1">
                                                <p class="text-sm text-white">{{ $price->value }} {{ $price->iconsgames->name }}</p>
                                                <div class="flex gap-2 items-center">
                                                    @if( $price->iconsgames)
                                                    <img src="{{ asset('storage/'.$price->iconsgames->gambar) }}" alt="" class="h-10 w-10 object-cover">
                                                    @endif
                                                    <p class="lg:text-sm md:text-sm text-xs text-white">Rp {{ number_format($price->harga, 0, ',','.') }}</p>
                                                </div>
                                                <div class="flex w-full justify-end">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-white icon-tabler icons-tabler-outline icon-tabler-info-circle">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 9h.01" /><path d="M11 12h1v4h1" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex justify-end items-center w-full h-9 bg-linear-to-b from-[#3c4044] to-[#4a5056] rounded-b-lg">
                                                <div class="bg-white w-13.5 h-4 rounded-sm mx-2">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="flex flex-col h-auto w-full lg:col-span-2 md:col-span-2 col-span-3 shadow-lg">
                        <div class="flex h-10 min-h-10 shrink-0 w-full items-center bg-[#5f666d] rounded-t-lg">
                            <div class="flex h-full w-10 shrink-0 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                                <p class="lg:text-base md:text-base text-xs text-white">3</p>
                            </div>
                            <p class="lg:text-sm md:text-sm text-xs text-white pl-4">Masukkan Jumlah Pembelian</p>
                        </div>
                        <div class="flex flex-col h-fit w-full bg-[#434649] rounded-b-lg">
                
                            <div class="flex justify-center items-center px-4 gap-4 my-4 h-fit w-full bg-[#434649] rounded-b-lg">
                                <div class="flex justify-center w-full items-center">
                                    <input type="text" wire:model.debounce.100ms="qty" inputmode="numeric" pattern="[0-9+]*" oninput="this.value = this.value.replace(/[^0-9+]/g, '')" id="Mid" class="w-full h-9 bg-[#5f666d] lg:placeholder:text-sm md:placeholder:text-sm placeholder:text-xs lg:text-sm md:text-sm text-xs rounded-md px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" min="1">
                                </div>
                                <div class="flex justify-center items-center gap-2">
                                    <button type="button" wire:click="tambah" @class(['flex justify-center items-center h-9 w-9 rounded-md cursor-pointer', 'bg-[#a58c6f] hover:opacity-80 cursor-pointer' => $qty < 3, 'bg-[#5f564b] cursor-not-allowed' => $qty >= 3,]) @disabled($qty > 3) >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                                    </button>
                                    <button type="button" wire:click="kurang" @class([ 'flex justify-center items-center h-9 w-9 rounded-md transition', 'bg-[#5f564b] cursor-not-allowed' => $qty <= 1, 'bg-[#a58c6f] hover:opacity-80 cursor-pointer' => $qty > 1,]) @disabled($qty <= 1) >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-minus"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M5 12l14 0" /></svg>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col h-auto w-full lg:col-span-2 md:col-span-2 col-span-3 shadow-lg">
                        <div class="flex h-10 min-h-10 shrink-0 w-full items-center bg-[#5f666d] rounded-t-lg">
                            <div class="flex h-full w-10 shrink-0 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                                <p class="lg:text-base md:text-base text-xs text-white">4</p>
                            </div>
                            <p class="lg:text-sm md:text-sm text-xs text-white pl-4">Detail Kontak</p>
                        </div>
                        <div class="flex flex-col h-full w-full bg-[#434649] rounded-b-lg">
                            <div class="flex flex-col h-full w-full py-3 px-4 gap-3">
                                <div class="flex flex-col gap-1 w-full">
                                    <label for="email" class="lg:text-sm md:text-sm text-xs text-white">Email</label>
                                    <input type="text" wire:model="email" id="email" class="flex lg:placeholder:text-sm md:placeholder:text-sm placeholder:text-xs lg:text-sm md:text-sm text-xs w-full h-8.5 bg-[#5f666d] rounded-md px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="example@gmail.com">
                                </div>

                                <div class="flex flex-col gap-1 w-full">
                                    <label for="noWa" class="lg:text-sm md:text-sm text-xs text-white">No. WhatsApp</label>
                                    <input type="text" wire:model="noWa" id="noWa" inputmode="numeric" pattern="[0-9+]*" oninput="this.value = this.value.replace(/[^0-9+]/g, '')" class="lg:placeholder:text-sm md:placeholder:text-sm placeholder:text-xs lg:text-sm md:text-sm text-xs w-full h-8.5 bg-[#5f666d] rounded-md px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="087xxxxxxxx">
                                </div>

                                <div class="flex flex-col gap-1 w-full">
                                    <label for="noWa" class="text-xs text-white italic">**Nomor ini akan dihubungi jika terjadi masalah</label>
                                    <div class="flex items-center bg-[#5f666d] rounded-md w-full h-11 gap-1 px-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-white icon-tabler icons-tabler-outline icon-tabler-info-circle">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 9h.01" /><path d="M11 12h1v4h1" />
                                        </svg>
                                        <p class="text-xs text-white">Jika ada kendala, kami akan menghubungi nomor WA kamu diatas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col h-auto w-full lg:col-span-2 md:col-span-2 col-span-3 shadow-lg">
                        <div class="flex h-10 min-h-10 shrink-0 w-full items-center bg-[#5f666d] rounded-t-lg">
                            <div class="flex h-full w-10 shrink-0 items-center justify-center bg-[#a58c6f] rounded-tl-lg">
                                <p class="lg:text-base md:text-base text-xs leading-none text-white">5</p>
                            </div>
                            <p class="lg:text-sm md:text-sm text-xs leading-none text-white pl-4">Kode Promo</p>
                        </div>
                        <div class="flex flex-col h-full w-full bg-[#434649] rounded-b-lg">
                            <div class="flex flex-col h-full w-full gap-4 py-4 px-4">
                                <div class="flex flex-row gap-4 w-full">
                                    <input type="text" wire:model.defer="voucherCode" id="Email" class="flex lg:placeholder:text-sm md:placeholder:text-sm placeholder:text-xs w-full h-8.5 bg-[#5f666d] rounded-md px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" @disabled(!$selectedPrice) placeholder="ketik Kode Promo Kamu">
                                    <button type="button" wire:click="applyDiskon" class="flex justify-center items-center bg-[#a58c6f] w-20.75 h-8 text-sm text-white rounded-md cursor-pointer" @disabled(!$selectedPrice)>Gunakan</button>
                                </div>
                                <a href="{{ route('voucher') }}" class="flex justify-center items-center bg-[#a58c6f] gap-2 w-52 h-8 rounded-md ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-white icon-tabler icons-tabler-outline icon-tabler-ticket">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 5l0 2" /><path d="M15 11l0 2" /><path d="M15 17l0 2" /><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
                                    </svg>
                                    <p class="text-xs text-white">Pakai Promo Yang Tersedia</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="lg:col-span-1 md:col-span-1 col-span-3">
                    <div id="Checkout" class="lg:block md:block hidden lg:sticky md:sticky fixed flex justify-center items-center flex-col lg:gap-4 md:gap-2 gap-0.5 lg:top-32 md:top-32 bottom-2 w-[96%] h-auto">
                        <div class="flex flex-col bg-[#444444] gap-2 lg:h-32 md:h-28 h-20.5 w-full rounded-lg p-4">
                            <p class="text-white font-semibold lg:text-base md:text-base text-xs">Ulasan dan rating</p>
                            <div class="flex gap-2">
                                <p class="lg:text-6xl md:text-5xl text-xl text-white font-bold">4.99</p>
                                <div class="flex flex-col gap-1">
                                    <div class="flex gap-0.5">
                                        @for ($z = 1; $z <= 5; $z++)
                                            <svg class="lg:w-10 md:w-8 w-4 lg:h-10 md:h-8 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24">
                                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                            </svg>
                                        @endfor
                                    </div>

                                    <p class="lg:text-xs md:text-xs text-[10px] text-white font-bold">Berdasarkan total 6.96jt rating</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex bg-[#444444] lg:h-17.75 md:h-17.75 h-14 w-full rounded-lg p-4 gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-white icon-tabler icons-tabler-outline icon-tabler-headphones">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 13m0 2a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2z" /><path d="M15 13m0 2a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2z" /><path d="M4 15v-3a8 8 0 0 1 16 0v3" />
                            </svg>
                            <div class="flex flex-col gap-0.5">
                                <p class="text-white lg:text-sm md:text-sm text-xs font-semibold">Butuh Bantuan?</p>
                                <p class="lg:text-xs md:text-xs text-[10px] text-white/80">Kamu bisa hubungi admin disini.</p>
                            </div>
                        </div>
                        @if ($selectedPrice)
                            <div class="flex flex-col gap-2 justify-center items-center border border-dashed border-white/30 bg-[#212121] h-full w-full rounded-lg p-4">
                                <div class="flex flex-row gap-2 w-full h-full">
                                    <div class="flex flex-col w-full gap-1">
                                        <p class="lg:text-sm md:text-sm text-xs text-white/80 capitalize">
                                            Game : {{ $selectedPrice->game->name }}
                                        </p>
                                        <p class="lg:text-sm md:text-sm text-xs text-white/80 capitalize">
                                            Event : {{ $selectedPrice->name }}
                                        </p>
                                        <p class="lg:text-sm md:text-sm text-xs text-white/80 capitalize">
                                            Diskon : {{ $diskon ?? 0 }} %
                                        </p>

                                    </div>
                                    <div class="flex flex-col w-full gap-1">
                                        <p class="lg:text-sm md:text-sm text-xs text-white/80 capitalize">
                                            coin : {{ $selectedPrice->value }} {{ $selectedPrice->iconsgames->name }}
                                        </p>
                                        <p class="lg:text-sm md:text-sm text-xs text-white/80 capitalize">
                                            harga : Rp. {{ number_format($selectedPrice->harga, 0, ',', '.') }}
                                        </p>
                                        
                                        <p class="lg:text-sm md:text-sm text-xs text-white/80 capitalize">
                                            Qty : {{ $qty }}
                                        </p>

                                    </div>
                                </div>
                                <div class="flex justify-center items-center w-full h-full bg-[#a58c6f] rounded-md px-2">
                                    <p class="lg:text-sm md:text-sm text-xs text-white capitalize">
                                        total = Rp. {{ number_format($this->total, 0, ',', '.') }}
                                    </p>
                                </div>
                            </div>
                        @else
                            <div class="flex justify-center items-center border border-dashed border-white/30 bg-[#212121] h-24.75 w-full rounded-lg p-4">
                                <p class="lg:text-sm md:text-sm text-xs text-white/80">
                                    Belum ada item produk yang dipilih.
                                </p>
                            </div>
                            
                        @endif
                        
                        <button wire:click="submit" class="flex gap-1 bg-[#a58c6f] hover:bg-[#8d7861] lg:h-8 md:h-8 h-6 w-full rounded-lg justify-center items-center cursor-pointer transition">
                            <img src="{{ asset('image/bag.png') }}" alt="" class="lg:h-4.5 md:h-4 h-4 lg:w-4.5 md:w-4 w-4">
                            <p class="text-white font-semibold lg:text-base md:text-sm text-sm">Pesan Sekarang!</p>
                        </button>
                    </div>
                </div>

                <div class="lg:hidden md:hidden block fixed bottom-8 right-6 z-50" onclick="toggleCheckout()">
                    <div class="flex justify-center items-center bg-amber-600 rounded-full w-12 h-12 shadow-lg cursor-pointer">
                        <span id="open-checkout" class="text-white">
                            <svg fill="#ffffff" width="22px" height="20px" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M891 308H340q-6 0-10.5-4t-5.5-10l-32-164q-2-14-12-22.5T256 99H110q-15 0-25.5 10.5T74 135v5q0 15 10.5 26t25.5 11h102q4 0 7 2.5t4 6.5l102 544q3 19 20 28 8 5 18 5h17q-22 25-21 58.5t25 56.5 57.5 23 58-23 25.5-56.5-22-58.5h186q-23 25-21.5 58.5T693 878t57.5 23 57.5-23 25-56.5-21-58.5h17q15 0 25.5-10.5T865 727v-8q0-15-11-25.5T828 683H409q-6 0-10.5-4t-5.5-9l-10-54q-1-8 4-14t12-5h460q13 0 22.5-8t11.5-21l33-219q3-16-7.5-28.5T891 308z"/></svg>
                        </span>
                        <span id="close-checkout" class="hidden text-white">✕</span>
                    </div>
                </div>

            </form>
            @php
                $content = $games->deskripsi['content'] ?? [];
            @endphp

            <div class="flex flex-col h-auto w-full col-span-3">
                <div class="flex h-10 min-h-10 items-center bg-[#5f666d] rounded-t-lg shadow-lg">
                    <div class="flex h-full w-10 justify-center items-center bg-[#a58c6f] rounded-tl-lg"></div>
                    <p class="lg:text-sm md:text-sm text-xs text-white pl-4">
                        Deskripsi {{ $games->name }}
                    </p>
                </div>

                <div class="flex flex-col bg-[#434649] rounded-b-lg px-4 py-4 gap-3">

                    @foreach ($content as $block)

                        {{-- PARAGRAPH --}}
                        @if ($block['type'] === 'paragraph')
                            <p class="lg:text-sm md:text-sm text-xs text-white">
                                {{ $block['content'][0]['text'] ?? '' }}
                            </p>
                        @endif

                        {{-- ORDERED LIST --}}
                        @if ($block['type'] === 'orderedList')
                            <ol class="list-decimal list-inside space-y-2 lg:text-sm md:text-sm text-xs text-white">
                                @foreach ($block['content'] as $item)
                                    <li>
                                        {{ $item['content'][0]['content'][0]['text'] ?? '' }}
                                    </li>
                                @endforeach
                            </ol>
                        @endif

                    @endforeach

                </div>
            </div>
                
            <div class="flex flex-col hs-accordion-group w-full col-span-3 gap-2">
                <p class="text-md text-white">Kamu Punya Pertanyaan?</p>

                <div class="hs-accordion bg-[#2f3133] px-4 py-3 rounded-md flex flex-col justify-center" id="hs-basic-with-arrow-heading-one">
                    <button class="flex justify-between hs-accordion-toggle items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-one">
                        <p class="lg:text-sm md:text-sm text-xs text-white">Bagaimana cara top up di Oura Store?</p>
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-with-arrow-collapse-one" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-one">
                        <ul class="flex flex-col gap-0.5 pt-2 text-white text-xs">
                            <li>- desain</li>
                            <li>- baju</li>
                        </ul>
                    </div>
                </div>

                <div class="hs-accordion bg-[#2f3133] px-4 py-3 rounded-md flex flex-col justify-center" id="hs-basic-with-arrow-heading-two">
                    <button class="flex justify-between hs-accordion-toggle items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-two">
                        <p class="lg:text-sm md:text-sm text-xs text-white">Metode pembayaran apa saja yang ada di Oura Store?</p>
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-with-arrow-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-two">
                    <p class="text-gray-800 dark:text-neutral-200 pt-2">
                        <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                    </p>
                    </div>
                </div>

                <div class="hs-accordion bg-[#2f3133] px-4 py-3 rounded-md flex flex-col justify-center" id="hs-basic-with-arrow-heading-three">
                    <button class="flex justify-between hs-accordion-toggle items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-three">
                        <p class="lg:text-sm md:text-sm text-xs text-white">Mengapa harus top up di Oura Store?</p>
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-with-arrow-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-three">
                    <p class="text-gray-800 dark:text-neutral-200 pt-2">
                        <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                    </p>
                    </div>
                </div>

                <div class="hs-accordion bg-[#2f3133] px-4 py-3 rounded-md flex flex-col justify-center" id="hs-basic-with-arrow-heading-four">
                    <button class="flex justify-between hs-accordion-toggle items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-four">
                        <p class="lg:text-sm md:text-sm text-xs text-white">Berapa lama proses top up di Oura Store?</p>
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-with-arrow-collapse-four" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-four">
                    <p class="text-gray-800 dark:text-neutral-200 pt-2">
                        <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                    </p>
                    </div>
                </div>

                <div class="hs-accordion bg-[#2f3133] px-4 py-3 rounded-md flex flex-col justify-center" id="hs-basic-with-arrow-heading-five">
                    <button class="flex justify-between hs-accordion-toggle items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-five">
                        <p class="lg:text-sm md:text-sm text-xs text-white">Apakah top up di Oura Store aman?</p>
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-with-arrow-collapse-five" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-five">
                    <p class="text-gray-800 dark:text-neutral-200 pt-2">
                        <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                    </p>
                    </div>
                </div>

                <div class="hs-accordion bg-[#2f3133] px-4 py-3 rounded-md flex flex-col justify-center" id="hs-basic-with-arrow-heading-six">
                    <button class="flex justify-between hs-accordion-toggle items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-six">
                        <p class="lg:text-sm md:text-sm text-xs text-white">Bagaimana cara cek transaksi di Oura Store?</p>
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-with-arrow-collapse-six" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-six">
                    <p class="text-gray-800 dark:text-neutral-200 pt-2">
                        <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                    </p>
                    </div>
                </div>

                <div class="hs-accordion bg-[#2f3133] px-4 py-3 rounded-md flex flex-col justify-center" id="hs-basic-with-arrow-heading-seven">
                    <button class="flex justify-between hs-accordion-toggle items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-seven">
                        <p class="lg:text-sm md:text-sm text-xs text-white">Apakah ada promo di Oura Store?</p>
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-with-arrow-collapse-seven" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-seven">
                    <p class="text-gray-800 dark:text-neutral-200 pt-2">
                        <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                    </p>
                    </div>
                </div>

                <div class="hs-accordion bg-[#2f3133] px-4 py-3 rounded-md flex flex-col justify-center" id="hs-basic-with-arrow-heading-eight">
                    <button class="flex justify-between hs-accordion-toggle items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-eight">
                        <p class="lg:text-sm md:text-sm text-xs text-white">Jika ada kendala bagaimana cara chat Costumer Service Oura Store?</p>
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-with-arrow-collapse-eight" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-eight">
                    <p class="text-gray-800 dark:text-neutral-200 pt-2">
                        <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                    </p>
                    </div>
                </div>

                <div class="hs-accordion bg-[#2f3133] px-4 py-3 rounded-md flex flex-col justify-center" id="hs-basic-with-arrow-heading-nine">
                    <button class="flex justify-between hs-accordion-toggle items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-nine">
                        <p class="lg:text-sm md:text-sm text-xs text-white">Berapa batas pembelian weekly diamond pass?</p>
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-with-arrow-collapse-nine" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-nine">
                    <p class="text-gray-800 dark:text-neutral-200 pt-2">
                        <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                    </p>
                    </div>
                </div>

                <div class="hs-accordion bg-[#2f3133] px-4 py-3 rounded-md flex flex-col justify-center" id="hs-basic-with-arrow-heading-ten">
                    <button class="flex justify-between hs-accordion-toggle items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-ten">
                        <p class="lg:text-sm md:text-sm text-xs text-white">Apa penjelasan diamond yang dalam kurung misalnya: 277 (250+27) Diamonds?</p>
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-with-arrow-collapse-ten" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-ten">
                    <p class="text-gray-800 dark:text-neutral-200 pt-2">
                        <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                    </p>
                    </div>
                </div>

                <div class="hs-accordion bg-[#2f3133] px-4 py-3 rounded-md flex flex-col justify-center" id="hs-basic-with-arrow-heading-eleven">
                    <button class="flex justify-between hs-accordion-toggle items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-eleven">
                        <p class="lg:text-sm md:text-sm text-xs text-white">Bagaimana cara menyelesaikan misi event minimal top up 250 diamond?</p>
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-with-arrow-collapse-eleven" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-eleven">
                    <p class="text-gray-800 dark:text-neutral-200 pt-2">
                        <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                    </p>
                    </div>
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
</div>

@include('components.midtrans-script')
