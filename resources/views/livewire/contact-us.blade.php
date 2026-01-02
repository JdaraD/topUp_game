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
    <div class="flex justify-center items-center bg-[#3a3c3b] w-full h-full">
        <div class="flex flex-col w-[50%] my-8 h-fit gap-4">
            <div>
                <img src="{{ asset('image/jd.png') }}" alt="" class="h-16 py-0.5 w-14 object-cover">
                <p class="text-white text-3xl font-bold">Formulir Laporan / Permintaan</p>
                <p class="text-white text-md">Silahkan isi formulir di bawah ini untuk melaporkan masalah yang Kamu alami. Tim kami akan segera menindaklanjuti laporan Kamu.</p>
            </div>
            <form wire:submit.prevent="register" class="flex flex-col w-full h-fit gap-4">
                
                <div class="hs-dropdown [--strategy:absolute] [--flip:false] hs-dropdown-example relative inline-flex">
                    <button id="hs-dropdown-example" type="button" class="hs-dropdown-toggle py-3 px-4 w-full inline-flex items-center justify-between text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        Actions
                        <svg class="hs-dropdown-open:rotate-180 text-white size-4 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 top-0 hidden z-10 w-full bg-white shadow-md rounded-lg p-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-example">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                        individu
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                        Perusahaan
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-1 hs-dropdown [--strategy:absolute] [--flip:false] hs-dropdown-example relative">
                    <p class="text-white text-sm">Tipe</p>
                    <button id="hs-dropdown-example" type="button" class="hs-dropdown-toggle py-3 px-4 w-full inline-flex items-center justify-between text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        Pilih Tipe
                        <svg class="hs-dropdown-open:rotate-180 text-white size-4 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 w-full bg-white shadow-md rounded-lg p-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-example">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                        individu
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                        Perusahaan
                        </a>
                    </div>
                </div>

                <div class="flex flex-col w-full gap-0.5">
                    <label for="namalengkap" name="namalengkap" class="text-white text-md">Nama lengkap</label>
                    <input type="text" name="namalengkap" id="namalengkap" class="bg-[#5f666d] h-8 w-full rounded-md px-1 outline-none focus:border-[#a58c6f] focus:ring-[#a58c6f] focus:border focus:ring-1" placeholder="Username">
                </div>

                <div class="flex flex-col w-full gap-0.5">
                    <label for="nomor" name="nomor" class="text-white text-md">Nomor Whatsapp</label>
                    <input type="tel" name="nomor" id="nomor" inputmode="numeric" pattern="[0-9+]*" oninput="this.value = this.value.replace(/[^0-9+]/g, '')" class="bg-[#5f666d] h-8 w-full rounded-md px-1 outline-none focus:border-[#a58c6f] focus:ring-[#a58c6f] focus:border focus:ring-1" placeholder="+62">
                </div>

                <div class="flex flex-col w-full gap-0.5">
                    <label for="deskripsi" name="deskripsi" class="text-white text-md">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" cols="50" class="bg-[#5f666d] h-16 w-full rounded-md px-1 outline-none focus:border-[#a58c6f] focus:ring-[#a58c6f] focus:border focus:ring-1" placeholder="Tulis pesan Kamu...."></textarea>
                </div>

                <button type="submit" class="flex bg-[#a58c6f] relative justify-center items-center h-10 px-2 w-full rounded-md hover:bg-[#927c63] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler text-white icons-tabler-outline icon-tabler-lock absolute left-4"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" /><path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                    </svg>
                    <p class="text-white font-bold">Kirim Pesan</p>
                </button>
            </form>

        </div>
    </div>
    <div class="flex w-full h-70">
        @if (file_exists(public_path('image/bgS.png')))
            <img src="{{ asset('image/bgS.png') }}" alt="" class="w-full h-full object-cover">  
            
        @else
            <div class="w-full h-full animate-pulse bg-gray-200/20"></div>
        @endif
    </div>
</div>
