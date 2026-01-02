<div class="flex flex-col py-12 items-center justify-center bottom-0 gap-12 bg-[#262727] w-full h-auto">
    <div class="flex flex-col w-[80%]">
        <div>
            <img src="{{ asset('image/jd.png') }}" alt="" class="h-16 py-0.5 w-14 object-cover">
        
        </div>
        <div class="flex gap-8">
            <div class="flex flex-col w-[40%] gap-4">
                <p class="text-white text-justify">J Gaming STORE adalah tempat top up games yang aman, murah dan terpercaya. Proses cepat 1-3 Detik. Open 24 jam. Payment terlengkap. Jika ada kendala silahkan klik logo CS pada kanan bawah di website ini.</p>
                <div class="flex gap-2">
                    <a href="#">
                        <img src="{{ asset('image/ig.png') }}" alt="" class="h-10 w-10">
                    </a>
                    <a href="#">
                        <img src="{{ asset('image/tiktok.png') }}" alt="" class="h-10 w-10">
                    </a>
                    <a href="#">
                        <img src="{{ asset('image/gmail.png') }}" alt="" class="h-10 w-10">
                    </a>
                    <a href="#">
                        <img src="{{ asset('image/youtube.png') }}" alt="" class="h-10 w-10">
                    </a>
       
                </div>
                
            </div>
            <div class="flex flex-col w-[10%] gap-4">
                <h3 class="text-[#8e7a5c] capitalize">peta situs</h3>
                <ul class="flex flex-col gap-1 capitalize text-white">
                    <li><a href="{{ route('home') }}">beranda</a></li>
                    <li>cek transaksi</li>
                    <li><a href="{{ route('contact-us') }}">hubungi kami</a></li>
                    <li><a href="{{ route('reviews') }}">ulasan</a></li>
                </ul>
            </div>
            <div class="flex flex-col w-[10%] gap-4">
                <h3 class="text-[#8e7a5c] capitalize">dukungan</h3>
                <ul class="flex flex-col gap-1 capitalize text-white">
                    <li>whatsapp</li>
                    <li>instagram</li>
                    <li>email</li>
                </ul>
            </div>
            <div class="flex flex-col w-[10%] gap-4">
                <h3 class="text-[#8e7a5c] capitalize">legalitas</h3>
                <ul class="flex flex-col gap-1 capitalize text-white">
                    <li><a href="{{ route('privacy-policy') }}">kebijakan pribadi</a></li>
                    <li>syarat & ketentuan</li>
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