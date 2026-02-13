<div class="flex flex-col lg:py-12 md:py-12 py-4 items-center justify-center bottom-0 lg:gap-12 md:gap-8 gap-4 bg-[#262727] w-full h-auto">
    <div class="flex flex-col lg:w-[80%] md:w-[80%] w-[95%]">
        @foreach ( $profil as $pro)
            <div>
                <img src="{{ asset('storage/' .$pro->gambar) }}" alt="" class="lg:h-16 md:h-16 h-12 py-0.5 lg:w-14 md:w-14 w-10 object-cover">
                
            </div>  
        @endforeach
        <div class="flex lg:gap-8 md:gap-6 gap-2">
            <div class="flex flex-col w-[40%] gap-4">
                @foreach ( $profil as $pro )
                    <p class="text-white text-justify lg:text-sm md:text-sm text-xs">{{ $pro->deskripsi }}</p>
                @endforeach
                {{-- <div class="flex gap-2">
                    <a href="#">
                        <img src="{{ asset('image/ig.png') }}" alt="" class="lg:h-10 md:h-10 h-8 lg:w-10 md:w-10 w-8">
                    </a>
                    <a href="#">
                        <img src="{{ asset('image/tiktok.png') }}" alt="" class="lg:h-10 md:h-10 h-8 lg:w-10 md:w-10 w-8">
                    </a>
                    <a href="#">
                        <img src="{{ asset('image/gmail.png') }}" alt="" class="lg:h-10 md:h-10 h-8 lg:w-10 md:w-10 w-8">
                    </a>
                    <a href="#">
                        <img src="{{ asset('image/youtube.png') }}" alt="" class="lg:h-10 md:h-10 h-8 lg:w-10 md:w-10 w-8">
                    </a>
       
                </div> --}}
                
            </div>
            <div class="flex flex-col w-[20%] lg:gap-4 md:gap-4 gap-2">
                <h3 class="text-[#8e7a5c] capitalize text-sm">peta situs</h3>
                <ul class="flex flex-col lg:gap-1 md:gap-1 gap-0 capitalize text-white">
                    <li><a href="{{ route('home') }}" class="lg:text-sm md:text-sm text-[10px]">beranda</a></li>
                    <li><a href="{{ route('riwayat') }}" class="lg:text-sm md:text-sm text-[10px]">cek transaksi</a></li>
                    <li><a href="{{ route('contact-us') }}" class="lg:text-sm md:text-sm text-[10px]">hubungi kami</a></li>
                    <li><a href="{{ route('reviews') }}" class="lg:text-sm md:text-sm text-[10px]">ulasan</a></li>
                </ul>
            </div>
            <div class="flex flex-col w-[20%] lg:gap-4 md:gap-4 gap-2">
                <h3 class="text-[#8e7a5c] capitalize text-sm">dukungan</h3>
                <ul class="flex flex-col lg:gap-1 md:gap-1 gap-0 capitalize text-white">
                    <li><a href="#" class="lg:text-sm md:text-sm text-[10px]">whatsapp</a></li>
                    <li><a href="#" class="lg:text-sm md:text-sm text-[10px]">instagram</a></li>
                    <li><a href="#" class="lg:text-sm md:text-sm text-[10px]">email</a></li>
                </ul>
            </div>
            <div class="flex flex-col w-[20%] lg:gap-4 md:gap-4 gap-2">
                <h3 class="text-[#8e7a5c] capitalize text-sm">legalitas</h3>
                <ul class="flex flex-col lg:gap-1 md:gap-1 gap-0 capitalize text-white">
                    <li><a href="{{ route('privacy-policy') }}" class="lg:text-sm md:text-sm text-[10px]">kebijakan pribadi</a></li>
                    <li><a href="{{ route('terms-and-conditions') }}" class="lg:text-sm md:text-sm text-[10px]">syarat & ketentuan</a></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="border-b border-white/10 w-full"></div>
    <div class="flex items-center justify-between w-[80%]">
        <div class="text-white select-none">
            <p>&copy; 2025 JGaming.All rights reserved</p>
        </div>
        <button class="border rounded-md border-[#8e7a5c]/10 py-1.5 px-1.5 cursor-pointer hover:bg-amber-50/10 transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="color: white;" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-moon">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
            </svg>
        </button>
    </div>
</div>