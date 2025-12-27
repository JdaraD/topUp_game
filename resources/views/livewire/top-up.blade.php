<div class="flex flex-col grow gap-4 justify-center items-center w-full h-full mt-27.5 select-none">
    <div class="flex flex-col w-full h-full justify-center items-center">
        <div class="flex justify-center items-center bg-gray-200/20 h-91 w-full object-cover">
            <img src="{{ asset('image/bg.gif') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="flex relative bg-linear-to-r from-[#1c1f22] to-[#2a2f34] justify-center items-center h-[160.8px] w-full">
            <div class="flex relative gap-4 h-[160.8px] w-[80%]">
                <div class="relative h-full w-[211.92px] perspective-[1000px]">
                    <div class="absolute bottom-10 h-52 w-48 transform-3d transform-[rotateY(25deg)_rotateX(0deg)_translateZ(15px)] rounded-xl overflow-hidden shadow-[0_30px_60px_-15px_rgba(0,0,0,0.8)]">
                        <img src="{{ asset('image/cover.png') }}" class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="flex relative gap-1 bg-yellow-400 h-full w-40"></div>
            </div>
        </div>
        <div class="grid grid-cols-3 relative mt-8 gap-8 h-auto w-[80%]">
            
            <div class="flex flex-col h-full w-full col-span-2">
                <div class="flex h-10 w-full items-center bg-[#5f666d] rounded-t-lg">
                    <div class="flex h-full w-10 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                        <p class="text-md text-white">1</p>
                    </div>
                    <p class="text-sm text-white pl-4">Masukkan Data Akun</p>
                </div>
                <div class="flex flex-row justify-center items-center px-5 pb-4 pt-5 gap-4 h-fit w-full bg-[#434649] rounded-b-lg">
                    <div>
                        <label for="Mid" class="text-white text-sm">ID</label>
                        <input type="text" id="Mid" class="w-95 h-8.5 bg-[#5f666d] rounded-md mt-2.5 px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan ID Akun Anda">
                    </div>
                    <div>
                        <label for="server" class="text-white text-sm">server</label>
                        <input type="text" id="server" class="w-95 h-8.5 bg-[#5f666d] rounded-md mt-2.5 px-3.5 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan server">
                    </div>
                </div>
            </div>

            <div class="bg-blue-400 h-40">
                <p>container bergerak</p>
            </div>

            <div class="flex flex-col h-auto w-full col-span-2">
                <div class="flex h-10 w-full items-center bg-[#5f666d] rounded-t-lg">
                    <div class="flex h-full w-10 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                        <p class="text-md text-white">2</p>
                    </div>
                    <p class="text-sm text-white pl-4">Pilih Nominal</p>
                </div>
                <div class="flex flex-col h-full w-full bg-[#434649] rounded-b-lg">
                    <div class="flex flex-col h-full w-full">
                        <p class="text-sm text-white px-4 py-3">Special Items✨</p>
                        
                        <div class="flex flex-wrap items-center px-4 gap-4">
                            @for ($i = 0; $i < 2; $i++)
                                <div class="flex flex-col rounded-lg w-61 h-28 bg-[#5f666d] cursor-pointer">
                                    <div class="w-full h-full"></div>
                                    <div class="w-full h-9 bg-linear-to-b from-[#3c4044] to-[#4a5056] rounded-b-lg"></div>
                                </div>
                            @endfor

                        </div>
                    </div>
                    
                    <div class="flex flex-col h-full pb-4 w-auto">
                        <p class="text-sm text-white px-4 py-4.5">Murah Meriah !!✨</p>
                        
                        <div class="flex flex-wrap items-center px-4 gap-4">
                            @for ($j = 0; $j < 24; $j++)
                                <div class="flex flex-col rounded-lg w-61 h-28 bg-[#5f666d] cursor-pointer">
                                    <div class="w-full h-full"></div>
                                    <div class="w-full h-9 bg-linear-to-b from-[#3c4044] to-[#4a5056] rounded-b-lg"></div>
                                </div>
                            @endfor

                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col h-auto w-full col-span-2">
                <div class="flex h-10 w-full items-center bg-[#5f666d] rounded-t-lg">
                    <div class="flex h-full w-10 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                        <p class="text-md text-white">3</p>
                    </div>
                    <p class="text-sm text-white pl-4">Masukkan Jumlah Pembelian</p>
                </div>
                <div class="flex flex-col h-full w-full bg-[#434649] rounded-b-lg">
                    <div class="flex flex-col h-full w-full pb-3">
                        <p class="text-sm text-white px-4 py-3">Special Items✨</p>
                        
                        <div class="flex flex-wrap items-center px-4 gap-4">

                            <div class="flex flex-col rounded-lg w-61 h-28 bg-[#5f666d] cursor-pointer">
                                <div class="w-full h-full"></div>
                                <div class="w-full h-9 bg-linear-to-b from-[#3c4044] to-[#4a5056] rounded-b-lg"></div>
                            </div>
                            <div class="flex flex-col rounded-lg w-61 h-28 bg-[#5f666d] cursor-pointer">
                                <div class="w-full h-full"></div>
                                <div class="w-full h-9 bg-linear-to-b from-[#3c4044] to-[#4a5056] rounded-b-lg"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col h-auto w-full col-span-2">
                <div class="flex h-10 w-full items-center bg-[#5f666d] rounded-t-lg">
                    <div class="flex h-full w-10 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                        <p class="text-md text-white">4</p>
                    </div>
                    <p class="text-sm text-white pl-4">Pilih Pembayaran</p>
                </div>
                <div class="flex flex-col h-full w-full bg-[#434649] rounded-b-lg">
                    <div class="flex flex-col h-full w-full pb-3">
                        <p class="text-sm text-white px-4 py-3">Special Items✨</p>
                        
                        <div class="flex flex-wrap items-center px-4 gap-4">

                            <div class="flex flex-col rounded-lg w-61 h-28 bg-[#5f666d] cursor-pointer">
                                <div class="w-full h-full"></div>
                                <div class="w-full h-9 bg-linear-to-b from-[#3c4044] to-[#4a5056] rounded-b-lg"></div>
                            </div>
                            <div class="flex flex-col rounded-lg w-61 h-28 bg-[#5f666d] cursor-pointer">
                                <div class="w-full h-full"></div>
                                <div class="w-full h-9 bg-linear-to-b from-[#3c4044] to-[#4a5056] rounded-b-lg"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col h-auto w-full col-span-2">
                <div class="flex h-10 w-full items-center bg-[#5f666d] rounded-t-lg">
                    <div class="flex h-full w-10 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                        <p class="text-md text-white">5</p>
                    </div>
                    <p class="text-sm text-white pl-4">Detail Kontak</p>
                </div>
                <div class="flex flex-col h-full w-full bg-[#434649] rounded-b-lg">
                    <div class="flex flex-col h-full w-full pb-3">
                        <p class="text-sm text-white px-4 py-3">Special Items✨</p>
                        
                        <div class="flex flex-wrap items-center px-4 gap-4">

                            <div class="flex flex-col rounded-lg w-61 h-28 bg-[#5f666d] cursor-pointer">
                                <div class="w-full h-full"></div>
                                <div class="w-full h-9 bg-linear-to-b from-[#3c4044] to-[#4a5056] rounded-b-lg"></div>
                            </div>
                            <div class="flex flex-col rounded-lg w-61 h-28 bg-[#5f666d] cursor-pointer">
                                <div class="w-full h-full"></div>
                                <div class="w-full h-9 bg-linear-to-b from-[#3c4044] to-[#4a5056] rounded-b-lg"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col h-auto w-full col-span-2">
                <div class="flex h-10 w-full items-center bg-[#5f666d] rounded-t-lg">
                    <div class="flex h-full w-10 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                        <p class="text-md text-white">6</p>
                    </div>
                    <p class="text-sm text-white pl-4">Kode Promo</p>
                </div>
                <div class="flex flex-col h-full w-full bg-[#434649] rounded-b-lg">
                    <div class="flex flex-col h-full w-full pb-3">
                        <p class="text-sm text-white px-4 py-3">Special Items✨</p>
                        
                        <div class="flex flex-wrap items-center px-4 gap-4">

                            <div class="flex flex-col rounded-lg w-61 h-28 bg-[#5f666d] cursor-pointer">
                                <div class="w-full h-full"></div>
                                <div class="w-full h-9 bg-linear-to-b from-[#3c4044] to-[#4a5056] rounded-b-lg"></div>
                            </div>
                            <div class="flex flex-col rounded-lg w-61 h-28 bg-[#5f666d] cursor-pointer">
                                <div class="w-full h-full"></div>
                                <div class="w-full h-9 bg-linear-to-b from-[#3c4044] to-[#4a5056] rounded-b-lg"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col h-auto w-full col-span-3">
                <div class="flex h-10 w-full items-center bg-[#5f666d] rounded-t-lg">
                    <div class="flex h-full w-10 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                        <p class="text-md text-white"></p>
                    </div>
                    <p class="text-sm text-white pl-4">Deskripsi Mobile Legends Paket Irit</p>
                </div>
                <div class="flex flex-col h-full w-full bg-[#434649] rounded-b-lg">
                    <div class="flex flex-col h-full w-full pb-3">
                        <p class="text-sm text-white px-4 py-3">Special Items✨</p>
                        
                        <div class="flex flex-wrap items-center px-4 gap-4">

                            <div class="flex flex-col rounded-lg w-61 h-28 bg-[#5f666d] cursor-pointer">
                                <div class="w-full h-full"></div>
                                <div class="w-full h-9 bg-linear-to-b from-[#3c4044] to-[#4a5056] rounded-b-lg"></div>
                            </div>
                            <div class="flex flex-col rounded-lg w-61 h-28 bg-[#5f666d] cursor-pointer">
                                <div class="w-full h-full"></div>
                                <div class="w-full h-9 bg-linear-to-b from-[#3c4044] to-[#4a5056] rounded-b-lg"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

