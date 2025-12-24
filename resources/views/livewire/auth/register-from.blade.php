<div class="flex w-full h-screen">
    <div class="flex flex-none relative justify-center items-center bg-[#262727] w-137.5 h-full">
        <button onclick="window.location.href='{{ route('home') }}'" class="absolute flex inset-4 w-9 h-9 top-4 left-4 justify-center items-center bg-[#212121] cursor-pointer rounded-md hover:bg-gray-800 transition">
            <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-white icon-tabler icons-tabler-outline icon-tabler-x">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" />
            </svg>
        </button>
        <div class="flex flex-col w-[80%] h-fit gap-4">
            <div>
                <p class="text-white text-2xl font-bold">Register</p>
                <p class="text-white text-sm">Masukkan informasi pendaftaran yang valid.</p>
            </div>
            <form wire:submit.prevent="register" class="flex flex-col w-full h-fit gap-4">
                <div class="flex gap-4 w-full">
                    <div class="flex flex-col w-full gap-0.5">
                        <label for="namalengkap" name="namalengkap" class="text-white text-md">Nama lengkap</label>
                        <input type="text" name="namalengkap" id="namalengkap" class="bg-[#5f666d] h-8 w-full rounded-md px-1 outline-none focus:border-[#a58c6f] focus:ring-[#a58c6f] focus:border focus:ring-1" placeholder="Username">
                    </div>
                    <div class="flex flex-col w-full gap-0.5">
                        <label for="username" name="username" class="text-white text-md">Username</label>
                        <input type="text" name="username" id="username" class="bg-[#5f666d] h-8 w-full rounded-md px-1 outline-none focus:border-[#a58c6f] focus:ring-[#a58c6f] focus:border focus:ring-1" placeholder="Username">
                    </div>
                </div>
                
                <div class="flex flex-col w-full gap-0.5">
                    <label for="email" name="email" class="text-white text-md">Alamat email</label>
                    <input type="email" name="email" id="email" class="bg-[#5f666d] h-8 w-full rounded-md px-1 outline-none focus:border-[#a58c6f] focus:ring-[#a58c6f] focus:border focus:ring-1" placeholder="Alamat email">
                </div>

                <div class="flex flex-col w-full gap-0.5">
                    <label for="nomor" name="nomor" class="text-white text-md">Nomor Whatsapp</label>
                    <input type="tel" name="nomor" id="nomor" inputmode="numeric" pattern="[0-9+]*" oninput="this.value = this.value.replace(/[^0-9+]/g, '')" class="bg-[#5f666d] h-8 w-full rounded-md px-1 outline-none focus:border-[#a58c6f] focus:ring-[#a58c6f] focus:border focus:ring-1" placeholder="+62">
                </div>

                <div class="flex gap-4 w-full">
                    <div class="flex flex-col w-full gap-0.5">
                        <label for="password" name="password" class="text-white text-md">Kata sandi</label>
                        <input type="password" name="password" id="password" class="bg-[#5f666d] h-8 w-full rounded-md px-1 outline-none focus:border-[#a58c6f] focus:ring-[#a58c6f] focus:border focus:ring-1" placeholder="Kata sandi">
                    </div>
                    <div class="flex flex-col w-full gap-0.5">
                        <label for="password_confirmation" name="password_confirmation" class="text-white text-md">Konfirmasi kata sandi</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="bg-[#5f666d] h-8 w-full rounded-md px-1 outline-none focus:border-[#a58c6f] focus:ring-[#a58c6f] focus:border focus:ring-1" placeholder="Kata sandi">
                    </div>
                </div>

                <div class="flex justify-between items-center">
                    <div class="flex justify-center gap-0.5 items-center">
                        <input type="checkbox" name="remember" id="remember" class="accent-orange-400">
                        <label for="remember" class="text-white text-sm">ingat akun ku</label>
                    </div>
                    <a href="" class="text-[#a58c66] text-sm hover:underline">Lupa kata sandi?</a>
                </div>
                <button type="submit" class="flex bg-[#a58c6f] relative justify-center items-center h-10 px-2 w-full rounded-md hover:bg-[#927c63] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler text-white icons-tabler-outline icon-tabler-lock absolute left-4"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" /><path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                    </svg>
                    <p class="text-white font-bold">Masuk</p>
                </button>
            </form>

            <p class="flex w-full h-full justify-center items-center text-sm text-white gap-1">Belum punya akun?<a href="{{ route('login') }}" class="text-[#a58c66] text-sm">Masuk</a></p>
            
        </div>
    </div>
    <div class="flex flex-auto bg-[#858585] h-full w-full">
    </div>
</div>
