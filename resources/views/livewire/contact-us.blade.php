<div class="flex flex-col grow justify-center items-center w-full h-full mt-27.5 select-none">
    <div class="flex flex-col justify-center items-center w-full h-auto bg-[#262727] shadow-lg">
        <div class="flex flex-col w-[80%] my-8 h-full gap-4">
            <p class="text-white text-4xl font-bold">Hubungi Kami</p>
            <p class="text-white text-sm">Mengalami masalah dengan waktu transaksi? Ingin memiliki bisnis permainan kredit? Silakan hubungi kami di bawah ini sesuai dengan kebutuhan Kamu!</p>
            <p class="text-white text-sm">Ruko Greenland, Batam, Kepulauan Riau,pIndonesia, 26464</p>
            <div class="flex gap-4">
                <div class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-white icon-tabler icons-tabler-outline icon-tabler-mail">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" />
                    </svg>
                    <p class="text-white">cs@Jgaming.com</p>
                </div>
                <div class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" class="icon text-white icon-tabler icons-tabler-filled icon-tabler-phone">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 3a1 1 0 0 1 .877 .519l.051 .11l2 5a1 1 0 0 1 -.313 1.16l-.1 .068l-1.674 1.004l.063 .103a10 10 0 0 0 3.132 3.132l.102 .062l1.005 -1.672a1 1 0 0 1 1.113 -.453l.115 .039l5 2a1 1 0 0 1 .622 .807l.007 .121v4c0 1.657 -1.343 3 -3.06 2.998c-8.579 -.521 -15.418 -7.36 -15.94 -15.998a3 3 0 0 1 2.824 -2.995l.176 -.005h4z" />
                    </svg>
                    <p class="text-white">6281333686227</p>
                </div>
            </div>

        </div>
    </div>
    <div class="bg-[#3a3c3b] w-full h-20">
        <p>test</p>
    </div>
    <div class="flex w-full h-70">
        @if (file_exists(public_path('image/bgS.png')))
            <img src="{{ asset('image/bgS.png') }}" alt="" class="w-full h-full object-cover">  
            
        @else
            <div class="w-full h-full animate-pulse bg-gray-200/20"></div>
        @endif
    </div>
</div>
