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
        <div class="grid grid-cols-3 relative mt-8 gap-8 h-full w-[80%]">
            <div class="flex flex-col col-span-2 h-40 w-full">
                <div class="flex h-10 gap-2.5 w-full items-center bg-[#5f666d] rounded-t-lg">
                    <div class="flex h-full w-10 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                        <p class="text-md text-white">1</p>
                    </div>
                    <p class="text-sm text-white">Masukkan Data Akun</p>
                </div>
                <div class="h-full w-full bg-[#434649] rounded-b-lg"></div>
            </div>
            <div class="bg-blue-400 h-40"></div>
            <div class="flex flex-col col-span-2 h-40 w-full">
                <div class="flex h-10 gap-2.5 w-full items-center bg-[#5f666d] rounded-t-lg">
                    <div class="flex h-full w-10 justify-center items-center bg-[#a58c6f] rounded-tl-lg">
                        <p class="text-md text-white">2</p>
                    </div>
                    <p class="text-sm text-white">Pilih Nominal</p>
                </div>
                <div class="h-full w-full bg-[#434649] rounded-b-lg"></div>
            </div>
        </div>
    </div>
</div>
