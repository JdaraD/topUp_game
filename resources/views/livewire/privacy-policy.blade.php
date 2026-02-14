<div class="flex flex-col grow gap-4 justify-center items-center w-full h-full lg:mt-27.5 md:mt-27.5 mt-20 select-none">

    <div class="flex flex-col lg:w-[60%] md:w-[60%] w-[80%] lg:my-8 md:my-8 my-4 h-full lg:gap-4 md:gap-4 gap-2">
        <h1 class="text-[#8e7a5c] text-xl font-semibold">Kebijakan Privasi</h1>
        <p class="text-white lg:text-base md:text-base text-sm text-justify">
            Kami di J Gaming STORE menghargai privasi Anda dan berkomitmen untuk melindungi informasi pribadi yang Anda berikan kepada kami. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi Anda saat Anda menggunakan layanan kami.
        </p>
        <h2 class="text-[#8e7a5c] text-xl font-semibold lg:mt-4 md:mt-4 mt-2">Informasi yang Kami Kumpulkan</h2>
        <p class="text-white lg:text-base md:text-base text-sm text-justify">
            Kami dapat mengumpulkan informasi pribadi seperti nama, alamat email, nomor telepon, dan informasi pembayaran saat Anda melakukan pembelian atau berinteraksi dengan layanan kami. Selain itu, kami juga dapat mengumpulkan informasi non-pribadi seperti data penggunaan situs web dan preferensi pengguna.
        </p>
        <h2 class="text-[#8e7a5c] text-xl font-semibold lg:mt-4 md:mt-4 mt-2">Penggunaan Informasi</h2>
        <p class="text-white lg:text-base md:text-base text-sm text-justify">
            Informasi yang kami kumpulkan digunakan untuk memproses pesanan Anda, memberikan layanan pelanggan, mengirimkan pembaruan produk, dan meningkatkan pengalaman pengguna di situs web kami. Kami juga dapat menggunakan informasi Anda untuk tujuan pemasaran, tetapi hanya dengan izin Anda.
        </p>
    </div>

    <div class="flex w-full lg:h-70 md:h-52 h-16">
        @if (file_exists(public_path('image/bgS.png')))
            <img src="{{ asset('image/bgS.png') }}" alt="" class="w-full h-full object-cover">  
            
        @else
            <div class="w-full h-full animate-pulse bg-gray-200/20"></div>
        @endif
    </div>

</div>
