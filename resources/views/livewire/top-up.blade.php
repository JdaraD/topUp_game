<div class="flex flex-col grow gap-4 justify-center items-center w-full h-full mt-27.5 select-none">
    <div class="flex flex-col w-full h-full justify-center items-center">
        <div class="flex justify-center items-center bg-gray-200/20 h-91 w-full object-cover">
            <img src="{{ asset('storage/'. $games->banner) }}" alt="" class="w-full h-full object-cover">
        </div>

        <div class="flex relative bg-linear-to-r from-[#1c1f22] to-[#2a2f34] justify-center items-center h-[160.8px] w-full">
            <div class="flex relative gap-4 h-[160.8px] w-[80%]">
                    
                <div class="relative h-full w-[211.92px] perspective-[1000px]">
                    <div class="absolute bottom-10 h-52 w-48 transform-3d transform-[rotateY(25deg)_rotateX(0deg)_translateZ(15px)] rounded-xl overflow-hidden shadow-[0_30px_60px_-15px_rgba(0,0,0,0.8)]">
                        <img src="{{ asset('storage/'. $games->gambar) }}" class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="flex flex-col relative justify-center gap-5 h-full w-fit">
                    <div class="flex flex-col gap-2">
                        <p class="text-white text-lg">{{ $games->name }}</p>
                        <p class="text-white text-sm">{{ $games->publisher }}</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="icon text-[#fade57] icon-tabler icons-tabler-filled icon-tabler-bolt">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M13 2l.018 .001l.016 .001l.083 .005l.011 .002h.011l.038 .009l.052 .008l.016 .006l.011 .001l.029 .011l.052 .014l.019 .009l.015 .004l.028 .014l.04 .017l.021 .012l.022 .01l.023 .015l.031 .017l.034 .024l.018 .011l.013 .012l.024 .017l.038 .034l.022 .017l.008 .01l.014 .012l.036 .041l.026 .027l.006 .009c.12 .147 .196 .322 .218 .513l.001 .012l.002 .041l.004 .064v6h5a1 1 0 0 1 .868 1.497l-.06 .091l-8 11c-.568 .783 -1.808 .38 -1.808 -.588v-6h-5a1 1 0 0 1 -.868 -1.497l.06 -.091l8 -11l.01 -.013l.018 -.024l.033 -.038l.018 -.022l.009 -.008l.013 -.014l.04 -.036l.028 -.026l.008 -.006a1 1 0 0 1 .402 -.199l.011 -.001l.027 -.005l.074 -.013l.011 -.001l.041 -.002z" />
                            </svg>
                            <p class="text-white text-sm">Proses Cepat</p>
                        </div>
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="icon text-[#6266f0] icon-tabler icons-tabler-filled icon-tabler-message">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 3a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-4.724l-4.762 2.857a1 1 0 0 1 -1.508 -.743l-.006 -.114v-2h-1a4 4 0 0 1 -3.995 -3.8l-.005 -.2v-8a4 4 0 0 1 4 -4zm-4 9h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0 -2m2 -4h-8a1 1 0 1 0 0 2h8a1 1 0 0 0 0 -2" />
                            </svg>
                            <p class="text-white text-sm">Layanan Chat 24/7</p>
                        </div>
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="icon text-[#6266f0] icon-tabler icons-tabler-filled icon-tabler-circle-check">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" />
                            </svg>
                            <p class="text-white text-sm">Pembayaran Aman!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 relative my-8 gap-8 h-auto w-[80%]">
            <form wire:submit.prevent="submit" class="col-span-3 grid grid-cols-3 relative gap-4 h-auto w-full">
                <div class="col-span-2 gap-8 flex flex-col h-auto w-full">

                    <div class="flex flex-col h-auto w-full col-span-2 shadow-lg">
                        <div class="flex h-10 w-full items-center bg-[#5f666d] rounded-t-lg">
                            <div class="flex h-full w-10 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                                <p class="text-md text-white">1</p>
                            </div>
                            <p class="text-sm text-white pl-4">Masukkan Data Akun</p>
                        </div>
                        <div class="flex flex-row justify-center items-center px-4 pb-4 pt-5 gap-4 h-fit w-full bg-[#434649] rounded-b-lg">
                            <div class="flex flex-col w-full">
                                <label for="Mid" class="text-white text-sm">ID</label>
                                <input type="text" wire:model="Mid" id="Mid" class="w-full h-8.5 bg-[#5f666d] rounded-md mt-2.5 px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan ID Akun Anda">
                            </div>
                            <div class="flex flex-col w-full">
                                <label for="server" class="text-white text-sm">server</label>
                                <input type="text" wire:model="server" id="server" class="w-full h-8.5 bg-[#5f666d] rounded-md mt-2.5 px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan server">
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col h-auto w-full col-span-2 shadow-lg">
                        <div class="flex h-10 min-h-10 shrink-0 w-full items-center bg-[#5f666d] rounded-t-lg">
                            <div class="flex h-full w-10 shrink-0 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                                <p class="text-md text-white">2</p>
                            </div>
                            <p class="text-sm text-white pl-4">Pilih Nominal</p>
                        </div>

                        <div class="flex flex-col h-full w-full py-4 gap-2 bg-[#434649] rounded-b-lg">
                            @foreach ( $games->priceGames as $price)
                                
                            <div class="flex flex-col h-full w-full gap-2">
                                <p class="text-sm text-white px-4">{{ $price->name }}✨</p>
                                
                                <div class="flex flex-wrap items-center px-4 gap-4">
                                        <div class="flex flex-col rounded-lg w-61 h-full bg-[#5f666d] shadow-lg cursor-pointer">
                                            <div class="flex flex-col justify-center w-full h-full px-2 gap-1">
                                                <p class="text-sm text-white">{{ $price->value }} {{ $price->iconsgames->name }}</p>
                                                <div class="flex gap-2 items-center">
                                                    @if( $price->iconsgames)
                                                        <img src="{{ asset('storage/'.$price->iconsgames->gambar) }}" alt="" class="h-10 w-10 object-cover">
                                                    @endif
                                                    <p class="text-sm text-white">Rp {{ number_format($price->harga, 0, ',','.') }}</p>
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
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="flex flex-col h-auto w-full col-span-2 shadow-lg">
                        <div class="flex h-10 min-h-10 shrink-0 w-full items-center bg-[#5f666d] rounded-t-lg">
                            <div class="flex h-full w-10 shrink-0 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                                <p class="text-md text-white">3</p>
                            </div>
                            <p class="text-sm text-white pl-4">Masukkan Jumlah Pembelian</p>
                        </div>
                        <div class="flex flex-col h-fit w-full bg-[#434649] rounded-b-lg">
                
                            <div class="flex justify-center items-center px-4 gap-4 my-4 h-fit w-full bg-[#434649] rounded-b-lg">
                                <div class="flex justify-center w-full items-center">
                                    <input type="text" wire:model.lazy="qty" inputmode="numeric" pattern="[0-9+]*" oninput="this.value = this.value.replace(/[^0-9+]/g, '') id="Mid" class="w-full h-9 bg-[#5f666d] rounded-md px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" min="1">
                                </div>
                                <div class="flex justify-center items-center gap-2">
                                    <button type="button" wire:click="tambah" class="flex justify-center items-center bg-[#a58c6f] h-9 w-9 rounded-md cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                                    </button>
                                    <button type="button" wire:click="kurang" @class([ 'flex justify-center items-center h-9 w-9 rounded-md transition', 'bg-[#5f564b] cursor-not-allowed' => $qty <= 1, 'bg-[#a58c6f] hover:opacity-80 cursor-pointer' => $qty > 1,]) @disabled($qty <= 1) >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-minus"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M5 12l14 0" /></svg>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col h-auto w-full col-span-2 shadow-lg">
                        <div class="flex h-10 min-h-10 shrink-0 w-full items-center bg-[#5f666d] rounded-t-lg">
                            <div class="flex h-full w-10 shrink-0 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                                <p class="text-md text-white">4</p>
                            </div>
                            <p class="text-sm text-white pl-4">Pilih Pembayaran</p>
                        </div>
                        <div class="flex flex-col h-full w-full bg-[#434649] rounded-b-lg">
                            <div class="flex flex-col justify-center items-center my-4 h-full w-full gap-4">
                                @for ($k = 0; $k < 2; $k++)
                                    <div class="flex bg-[#62696f] w-[96%] h-18 px-2 gap-2 rounded-md shadow-lg cursor-pointer">
                                        <div class="flex justify-center items-center">
                                            <img src="{{ asset('image/gopay.png') }}" alt="" class="w-10 h-10 object-contain">
                                        </div>
                                        <p class="text-white text-sm self-center">GoPay</p>
                                    </div>
                                @endfor

                                @for ($l = 0; $l < 4; $l++)
                                    <div class="flex flex-col w-[96%] h-fit cursor-pointer">
                                        <div class="flex bg-[#373b3f] justify-between items-center px-2 h-11 w-full shadow-lg rounded-t-md">
                                            <p class="text-white text-sm self-center">QRIS</p>
                                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> 
                                                <path d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z" fill="#ffffff"></path> 
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#62696f] h-9 w-full rounded-b-md">
                                            @for ($m = 0; $m < 6; $m++)
                                                <div class="bg-white w-13.5 h-4 rounded-sm mx-2">

                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col h-auto w-full col-span-2 shadow-lg">
                        <div class="flex h-10 min-h-10 shrink-0 w-full items-center bg-[#5f666d] rounded-t-lg">
                            <div class="flex h-full w-10 shrink-0 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                                <p class="text-md text-white">5</p>
                            </div>
                            <p class="text-sm text-white pl-4">Detail Kontak</p>
                        </div>
                        <div class="flex flex-col h-full w-full bg-[#434649] rounded-b-lg">
                            <div class="flex flex-col h-full w-full py-3 px-4 gap-3">
                                <div class="flex flex-col gap-1 w-full">
                                    <label for="Email" class="text-sm text-white">Email</label>
                                    <input type="text" id="Email" class="flex w-full h-8.5 bg-[#5f666d] rounded-md px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="example@gmail.com">
                                </div>

                                <div class="flex flex-col gap-1 w-full">
                                    <label for="NoWa" class="text-sm text-white">No. WhatsApp</label>
                                    <input type="text" id="NoWa" inputmode="numeric" pattern="[0-9+]*" oninput="this.value = this.value.replace(/[^0-9+]/g, '')" class="w-full h-8.5 bg-[#5f666d] rounded-md px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="+62">
                                </div>

                                <div class="flex flex-col gap-1 w-full">
                                    <label for="NoWa" class="text-xs text-white italic">**Nomor ini akan dihubungi jika terjadi masalah</label>
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

                    <div class="flex flex-col h-auto w-full col-span-2 shadow-lg">
                        <div class="flex h-10 min-h-10 shrink-0 w-full items-center bg-[#5f666d] rounded-t-lg">
                            <div class="flex h-full w-10 shrink-0 items-center justify-center bg-[#a58c6f] rounded-tl-lg">
                                <p class="text-md leading-none text-white">6</p>
                            </div>
                            <p class="text-sm leading-none text-white pl-4">Kode Promo</p>
                        </div>
                        <div class="flex flex-col h-full w-full bg-[#434649] rounded-b-lg">
                            <div class="flex flex-col h-full w-full gap-4 py-4 px-4">
                                <div class="flex flex-row gap-4 w-full">
                                    <input type="text" id="Email" class="flex w-full h-8.5 bg-[#5f666d] rounded-md px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="ketik Kode Promo Kamu">
                                    <button class="flex justify-center items-center bg-[#a58c6f] w-20.75 h-8 text-sm text-white rounded-md">Gunakan</button>
                                </div>
                                <div class="flex justify-center items-center bg-[#a58c6f] gap-2 w-52 h-8 rounded-md ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-white icon-tabler icons-tabler-outline icon-tabler-ticket">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 5l0 2" /><path d="M15 11l0 2" /><path d="M15 17l0 2" /><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
                                    </svg>
                                    <p class="text-xs text-white">Pakai Promo Yang Tersedia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="col-span-1">
                    <div class="sticky flex flex-col gap-4 top-32">
                        <div class="flex flex-col bg-[#444444] gap-2 h-32 w-full rounded-lg p-4">
                            <p class="text-white font-semibold">Ulasan dan rating</p>
                            <div class="flex gap-0.5">
                                <p class="text-6xl text-white font-bold">4.99</p>
                                <div class="flex flex-col gap-1">
                                    <div class="flex gap-0.5">
                                        @for ($z = 1; $z <= 5; $z++)
                                            <svg class="w-10 h-10 text-yellow-400 fill-current" viewBox="0 0 24 24">
                                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                            </svg>
                                        @endfor
                                    </div>

                                    <p class="text-xs text-white font-bold">Berdasarkan total 6.96jt rating</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex bg-[#444444] h-17.75 w-full rounded-lg p-4 gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-white icon-tabler icons-tabler-outline icon-tabler-headphones">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 13m0 2a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2z" /><path d="M15 13m0 2a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2z" /><path d="M4 15v-3a8 8 0 0 1 16 0v3" />
                            </svg>
                            <div class="flex flex-col gap-0.5">
                                <p class="text-white text-sm font-semibold">Butuh Bantuan?</p>
                                <p class="text-xs text-white/80">Kamu bisa hubungi admin disini.</p>
                            </div>
                        </div>
                        <div class="flex justify-center items-center border border-dashed border-white/30 bg-[#212121] h-24.75 w-full rounded-lg p-4">
                            <p class="text-sm text-white/80">
                                Belum ada item produk yang dipilih.
                            </p>
                        </div>
                        <button class="flex gap-1 bg-[#a58c6f] hover:bg-[#8d7861] h-8 w-full rounded-lg justify-center items-center">
                            <img src="{{ asset('image/bag.png') }}" alt="" class="h-4.5 w-4.5">
                            <p class="text-white font-semibold">Pesan Sekarang!</p>
                        </button>
                    </div>
                </div>
            </form>


            @php
                $content = $games->deskripsi['content'] ?? [];
            @endphp

            <div class="flex flex-col h-auto w-full col-span-3">
                <div class="flex h-10 min-h-10 items-center bg-[#5f666d] rounded-t-lg shadow-lg">
                    <div class="flex h-full w-10 justify-center items-center bg-[#a58c6f] rounded-tl-lg"></div>
                    <p class="text-sm text-white pl-4">
                        Deskripsi {{ $games->name }}
                    </p>
                </div>

                <div class="flex flex-col bg-[#434649] rounded-b-lg px-4 py-4 gap-3">

                    @foreach ($content as $block)

                        {{-- PARAGRAPH --}}
                        @if ($block['type'] === 'paragraph')
                            <p class="text-sm text-white">
                                {{ $block['content'][0]['text'] ?? '' }}
                            </p>
                        @endif

                        {{-- ORDERED LIST --}}
                        @if ($block['type'] === 'orderedList')
                            <ol class="list-decimal list-inside space-y-2 text-sm text-white">
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
                        <p class="text-sm text-white">Bagaimana cara top up di Oura Store?</p>
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
                        <p class="text-sm text-white">Metode pembayaran apa saja yang ada di Oura Store?</p>
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
                        <p class="text-sm text-white">Mengapa harus top up di Oura Store?</p>
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
                        <p class="text-sm text-white">Berapa lama proses top up di Oura Store?</p>
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
                        <p class="text-sm text-white">Apakah top up di Oura Store aman?</p>
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
                        <p class="text-sm text-white">Bagaimana cara cek transaksi di Oura Store?</p>
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
                        <p class="text-sm text-white">Apakah ada promo di Oura Store?</p>
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
                        <p class="text-sm text-white">Jika ada kendala bagaimana cara chat Costumer Service Oura Store?</p>
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
                        <p class="text-sm text-white">Berapa batas pembelian weekly diamond pass?</p>
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
                        <p class="text-sm text-white">Apa penjelasan diamond yang dalam kurung misalnya: 277 (250+27) Diamonds?</p>
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
                        <p class="text-sm text-white">Bagaimana cara menyelesaikan misi event minimal top up 250 diamond?</p>
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


        <div class="flex w-full h-70">
            @if (file_exists(public_path('image/bgS.png')))
                <img src="{{ asset('image/bgS.png') }}" alt="" class="w-full h-full object-cover">  
                
            @else
                <div class="w-full h-full animate-pulse bg-gray-200/20"></div>
            @endif
        </div>
    </div>
</div>

