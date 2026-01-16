@if ($colorheader)
<div id="header" class="flex fixed z-50 flex-col items-center w-full backdrop-blur-md transition-all duration-300 ease-out" style="background-color: rgba({{ hexdec(substr($colorheader->colorHeader, 1, 2)) }}, {{ hexdec(substr($colorheader->colorHeader, 3, 2)) }}, {{ hexdec(substr($colorheader->colorHeader, 5, 2)) }}, {{ $colorheader->colorHeader_opacity / 100 }} ); ">
@endif
    <div class="flex w-[82%] h-16 justify-center items-center gap-4 mb-1">
        @if ($profil)
        <img src="{{ asset('storage/' .$profil->gambar)  }}" alt="" class="h-16 py-0.5 w-14 object-cover">
        @endif
        <div name="search-bar" class="flex grow bg-[#52595d] w-263.75 h-9 rounded-lg border border-white/10 shadow-amber-50 items-center px-2 hover:cursor-text gap-2">
            <x-jam-search class="h-5 fill-white/60" />
            <input type="text" class="w-full text-white border-0 focus:outline-none focus:ring-0" placeholder="Cari Game atau Voucher">
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
            <a href="{{ route('home') }}" class="flex items-center gap-2 hover:border-b border-yellow-600/80 cursor-pointer">
                <img src="{{ asset('image/bag.png') }}" alt="" class="h-4.5 w-4.5">
                <p class="text-sm font-medium text-white">Topup</p>
            </a>
            <a href="{{ route('riwayat') }}" class="flex items-center gap-2 hover:border-b border-yellow-600/80 cursor-pointer">
                <img src="{{ asset('image/tk.png') }}" alt="" class="h-4.5 w-4.5">
                <p class="text-sm font-medium text-white">Cek Transaksi</p>
            </a>
            <div class="flex items-center gap-2 hover:border-b border-yellow-600/80 cursor-pointer">
                <img src="{{ asset('image/ld.png') }}" alt="" class="h-4.5 w-4.5">
                <p class="text-sm font-medium text-white">Leaderboard</p>
            </div>
            <div class="flex items-center gap-2 hover:border-b border-yellow-600/80 cursor-pointer">
                <img src="{{ asset('image/tb.png') }}" alt="" class="h-4.5 w-4.5">
                <p class="text-sm font-medium text-white">Kalkulator</p>
            </div>
            
        </div>
        
        <div class="flex order-2 gap-4">
            <div class="flex items-center gap-2 hover:border-b border-yellow-600/80 cursor-pointer">
                <img src="{{ asset('image/enter.png') }}" alt="" class="h-4.5 w-4.5">
                <a href="{{ route('login') }}" class="text-sm font-medium text-white">Masuk</a>
            </div>
            <div class="flex items-center gap-2 hover:border-b border-yellow-600/80 cursor-pointer">
                <img src="{{ asset('image/user.png') }}" alt="" class="h-4.5 w-4.5">
                <a href="{{ route('register') }}" class="text-sm font-medium text-white">Daftar</a>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    const header = document.getElementById('header');

    window.addEventListener("scroll", () => {

        if (window.scrollY > 20) {
            header.classList.add('fixed', 'top-0', 'left-0', 'w-full', 'bg-[#222222]/70', 'shadow-md');
            header.classList.remove('relative');
        } else {
            header.classList.remove('fixed', 'top-0', 'left-0', 'w-full', 'bg-[#222222]/70', 'shadow-md');
            header.classList.add('relative');
        }

    })

</script> --}}
