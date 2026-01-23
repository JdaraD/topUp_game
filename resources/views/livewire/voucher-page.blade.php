<div class="flex flex-col grow gap-4 justify-center items-center w-full h-full mt-27.5">
    <div class="grid grid-cols-2 gap-2 w-[80%] min-h-40 mt-7">
        @if ($voucher == null)
            @for ($i = 0; $i < 2; $i++)
            <div class="flex justify-center items-center w-full h-30 rounded-md bg-white/10 shadow-lg border border-white/20 gap-4 p-4 animate-pulse">

            </div>
            @endfor
        @else
            @if ($voucher)
            <div class="flex justify-center items-center w-full h-30 rounded-md shadow-lg bg-white/10 hover:bg-white/20 border border-white/20 gap-4 p-4">
                @if ($profil)
                <img src="{{ 'storage/' . $profil->gambar }}" alt="Logo" class="h-20 py-0.5 w-18 object-cover">
                @endif
                <div class="flex flex-col gap-0.5">
                    <p class="text-white text-lg font-bold">Voucher : {{ $voucher->name }}</p>
                    <p class="text-white text-md font-bold">Code : {{ $voucher->code }}</p>
                    <p class="text-white text-sm font-bold">Diskon : {{ $voucher->discount }} %</p>

                </div>
            </div>
            @endif
        @endif

    </div>
</div>