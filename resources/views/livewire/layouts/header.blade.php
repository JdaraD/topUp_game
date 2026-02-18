@if ($colorheader)
<div id="header" class="fixed flex z-50 flex-col items-center w-full backdrop-blur-md transition-all duration-300 ease-out" style="background-color: rgba({{ hexdec(substr($colorheader->colorHeader, 1, 2)) }}, {{ hexdec(substr($colorheader->colorHeader, 3, 2)) }}, {{ hexdec(substr($colorheader->colorHeader, 5, 2)) }}, {{ $colorheader->colorHeader_opacity / 100 }} ); ">
@endif
    <div class="flex lg:w-[82%] md:w-[82%] w-[92%] h-16 justify-center items-center gap-4 mb-1">
        @if ($profil)
        <img src="{{ asset('storage/' .$profil->gambar)  }}" alt="" class="lg:h-16 md:h-12 h-10 py-0.5 lg:w-14 md:w-10 w-8 object-cover">
        @endif
        <div name="search-bar" class="flex grow bg-[#52595d] lg:w-263.75 md:w-263.75 w-10 h-9 rounded-lg border border-white/10 shadow-amber-50 items-center px-2 hover:cursor-text gap-2">
            <x-jam-search class="h-5 fill-white/60" />
            <input type="text" class="w-full text-white lg:text-sm md:text-sm text-xs border-0 focus:outline-none focus:ring-0 lg:placeholder:text-sm md:placeholder:text-sm placeholder:text-xs" placeholder="Cari Game atau Voucher">
        </div>
        <div class="lg:block md:block hidden">
            <div class="flex flex-none bg-transparent lg:h-9 md:h-9 h-7 lg:w-26 md:w-26 w-20 items-center justify-center rounded-md border border-white/20 px-2 gap-1">
                <div class="flex">
                    <img src="{{ asset('image/ind.png') }}" alt="" class="lg:w-6 md:w-5 w-4 lg:h-6 md:h-5 h-4 rounded-full object-cover">
                </div>
                <p class="lg:text-sm md:text-sm text-[8px] font-medium text-white">ID / IDR</p>

            </div>
        </div>
            {{-- Mobile navbar --}}
        <button name="Hamburger" onclick="openHamburger()" class="border-[#8e7a5c]/10 hover:bg-amber-50/10 transition h-9 w-14 block lg:hidden md:hidden border rounded-md cursor-pointer">
            <span id="icon-open" class="text-white">☰</span>
            <span id="icon-close" class="hidden text-white">✕</span>
        </button>
    </div>

    <div class="border-b border-white/10 w-full">
    </div>

    <div class="lg:block md:block hidden lg:w-[82%] md:w-[82%] w-[88%] h-12">
        <div class="flex justify-between items-center w-full h-full">
            <div class="flex order-1 gap-2 bg-(image)">
                <a href="{{ route('home') }}" class="flex items-center gap-2 hover:border-b border-yellow-600/80 cursor-pointer">
                    <img src="{{ asset('image/bag.png') }}" alt="" class="lg:h-4.5 md:h-4 h-3.5 lg:w-4.5 md:w-4 w-3.5">
                    <p class="lg:text-sm md:text-sm text-xs font-medium text-white">Topup</p>
                </a>
                <a href="{{ route('riwayat') }}" class="flex items-center gap-2 hover:border-b border-yellow-600/80 cursor-pointer">
                    <img src="{{ asset('image/tk.png') }}" alt="" class="lg:h-4.5 md:h-4 h-3.5 lg:w-4.5 md:w-4 w-3.5">
                    <p class="lg:text-sm md:text-sm text-xs font-medium text-white">Cek Transaksi</p>
                </a>
                <div class="flex items-center gap-2 hover:border-b border-yellow-600/80 cursor-pointer">
                    <img src="{{ asset('image/ld.png') }}" alt="" class="lg:h-4.5 md:h-4 h-3.5 lg:w-4.5 md:w-4 w-3.5">
                    <p class="lg:text-sm md:text-sm text-xs font-medium text-white">Leaderboard</p>
                </div>
                <div class="flex items-center gap-2 hover:border-b border-yellow-600/80 cursor-pointer">
                    <img src="{{ asset('image/tb.png') }}" alt="" class="lg:h-4.5 md:h-4 h-3.5 lg:w-4.5 md:w-4 w-3.5">
                    <p class="lg:text-sm md:text-sm text-xs font-medium text-white">Kalkulator</p>
                </div>
                
            </div>
            
            <div class="flex order-2 gap-4">
                <div class="flex items-center gap-2 hover:border-b border-yellow-600/80 cursor-pointer">
                    <img src="{{ asset('image/enter.png') }}" alt="" class="lg:h-4.5 md:h-4 h-3.5 lg:w-4.5 md:w-4 w-3.5">
                    <a href="{{ route('login') }}" class="lg:text-sm md:text-sm text-xs font-medium text-white">Masuk</a>
                </div>
                <div class="flex items-center gap-2 hover:border-b border-yellow-600/80 cursor-pointer">
                    <img src="{{ asset('image/user.png') }}" alt="" class="lg:h-4.5 md:h-4 h-3.5 lg:w-4.5 md:w-4 w-3.5">
                    <a href="{{ route('register') }}" class="lg:text-sm md:text-sm text-xs font-medium text-white">Daftar</a>
                </div>
            </div>
        </div>
    </div>

    {{-- mobile menu --}}
    <div id="Hamburger" class="hidden w-full h-full">
        <div class="relative flex justify-center items-center w-full h-full">
            <div class="flex flex-col w-[90%] my-2.5 gap-1">
                <a href="{{ route('home') }}" class="flex items-center gap-2 cursor-pointer px-2.5 py-2.5 hover:border border-yellow-600/80 w-full h-full rounded-md">
                    <img src="{{ asset('image/bag.png') }}" alt="" class="lg:h-4.5 md:h-4 h-3.5 lg:w-4.5 md:w-4 w-3.5">
                    <p class="lg:text-sm md:text-sm text-xs font-medium text-white">Topup</p>
                </a>
                <a href="{{ route('riwayat') }}" class="flex items-center gap-2 cursor-pointer px-2.5 py-2.5 hover:border border-yellow-600/80 w-full h-full rounded-md">
                    <img src="{{ asset('image/tk.png') }}" alt="" class="lg:h-4.5 md:h-4 h-3.5 lg:w-4.5 md:w-4 w-3.5">
                    <p class="lg:text-sm md:text-sm text-xs font-medium text-white">Cek Transaksi</p>
                </a>
                <div class="flex items-center gap-2 cursor-pointer px-2.5 py-2.5 hover:border border-yellow-600/80 w-full h-full rounded-md">
                    <img src="{{ asset('image/ld.png') }}" alt="" class="lg:h-4.5 md:h-4 h-3.5 lg:w-4.5 md:w-4 w-3.5">
                    <p class="lg:text-sm md:text-sm text-xs font-medium text-white">Leaderboard</p>
                </div>
                <div class="flex items-center gap-2 cursor-pointer px-2.5 py-2.5 hover:border border-yellow-600/80 w-full h-full rounded-md">
                    <img src="{{ asset('image/tb.png') }}" alt="" class="lg:h-4.5 md:h-4 h-3.5 lg:w-4.5 md:w-4 w-3.5">
                    <p class="lg:text-sm md:text-sm text-xs font-medium text-white">Kalkulator</p>
                </div>
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
