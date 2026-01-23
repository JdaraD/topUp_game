<div class="flex flex-col grow gap-4 justify-center items-center w-full h-full mt-27.5 select-none">
    <div class="flex flex-col bg-[#52595d] p-10 my-2 gap-3 rounded shadow-lg justify-center text-center border border-white/20">
        <div class="flex w-full h-full justify-center text-center">
            @if ($profil)
                <img src="{{ asset('storage/' .$profil->gambar)  }}" alt="" class="h-16 py-0.5 w-14 object-cover">
            @endif
        </div>

        <h1 class="text-2xl font-bold text-green-600">
            Transaksi Berhasil 🎉
        </h1>

        <h2 class="text-white">
            Pesanan dengan ID <span class="font-mono font-semibold">{{ request()->get('order_id') }}</span> telah berhasil diproses.
            <br>
            Silakan cek email atau cek Transaksi untuk detail lebih lanjut.
        </h2>

        <p class="mt-2 text-white">
            Terima kasih telah Top Up di toko kami 
        </p>

        <a href="{{ route('home') }}" class="border text-white border-white/20 bg-[#262727] py-2 px-2 rounded-md hover:bg-amber-50/40 transition delay-75 cursor-pointer">
            Kembali ke Beranda
        </a>

    </div>
</div>
