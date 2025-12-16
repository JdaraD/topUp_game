<div class="flex flex-col items-center w-full bg-[#222222]">
    <div class="flex w-[82%] h-16 justify-center items-center gap-4 mb-1">
        <img src="{{ asset('image/jd.png') }}" alt="" class="h-full py-0.5 w-auto">
        <div name="search-bar" class="flex grow bg-[#52595d] w-263.75 h-9 rounded-lg border border-white/10 shadow-amber-50 items-center px-2 hover:cursor-text gap-2">
            <x-jam-search class="h-5 fill-white/60" />
            <input type="text" class="w-full text-white border-0 focus:outline-none focus:ring-0 font-sans" placeholder="Cari Game atau Voucher">
        </div>
        <div class="flex flex-none bg-transparent h-9 w-26 items-center rounded-md border border-white/20 px-2 gap-1">
            <div class="flex">
                <img src="{{ asset('image/ind.png') }}" alt="" class="w-6 h-6 rounded-full object-cover">
            </div>
            <p class="text-sm font-medium text-white">ID / IDR</p>
        </div>
    </div>
    <div class="border-b border-white/10 w-full">
    </div>
    <div class="flex justify-between items-center w-[82%] h-10">
        <div class="flex order-1 gap-2 bg-(image)">
            <p>test1</p>
            <p>test2</p>
            <p>test3</p>
            <p>test4</p>
        </div>
        <div class="flex order-2">
            <p>test</p>
            <p>test</p>

        </div>
    </div>
</div>
