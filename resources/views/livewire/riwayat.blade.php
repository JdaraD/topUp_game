<div class="flex flex-col grow gap-4 justify-center items-center w-full h-full lg:mt-27.5 md:mt-27.5 mt-20 select-none">
    <h1 class="text-white lg:text-xl md:text-xl text-md font-bold lg:mt-4 md:mt-4 mt-2">Riwayat Pembelian</h1>

    <div class="flex h-full lg:w-[80%] md:w-[80%] w-[96%] lg:my-8 md:my-8 my-4">
        <table class="w-full border border-amber-200/40 rounded-lg overflow-hidden">
            <thead class="bg-amber-200/10">
                <tr>
                    <th class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-white lg:text-base md:text-base text-[10px] border border-amber-200/40">No</th>
                    <th class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-white lg:text-base md:text-base text-[10px] border border-amber-200/40">Tanggal</th>
                    <th class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-white lg:text-base md:text-base text-[10px] border border-amber-200/40">Nomor Invoice</th>
                    <th class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-white lg:text-base md:text-base text-[10px] border border-amber-200/40">Nama Game</th>
                    <th class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-white lg:text-base md:text-base text-[10px] border border-amber-200/40">Harga</th>
                    <th class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-white lg:text-base md:text-base text-[10px] border border-amber-200/40">Qty</th>
                    <th class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-white lg:text-base md:text-base text-[10px] border border-amber-200/40">Status</th>
                </tr>
            </thead>

            <tbody wire:poll.3s.visible="loadRiwayat">
                {{-- @for ($i = 0; $i < 6; $i++)
                    <tr class="hover:bg-amber-200/5">
                        <td class="px-3 py-2 text-white text-md border border-amber-200/40 text-center">{{ $i + 1 }}</td>
                        <td class="px-3 py-2 text-white text-md border border-amber-200/40">2026-01-15</td>
                        <td class="px-3 py-2 text-white text-md border border-amber-200/40">INV-001</td>
                        <td class="px-3 py-2 text-white text-md border border-amber-200/40">Mobile Legends</td>
                        <td class="px-3 py-2 text-white text-md border border-amber-200/40">Rp 50.000</td>
                        <td class="px-3 py-2 text-white text-md border border-amber-200/40 text-center">2</td>
                        <td class="px-3 py-2 text-green-400 text-md border border-amber-200/40 text-center">Success</td>
                    </tr>
                @endfor --}}
                @foreach ($riwayatPembelian as $rp)
                <tr class="hover:bg-amber-200/5">
                        <td class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-white lg:text-base md:text-base text-[10px] border border-amber-200/40 text-center">{{ $loop->iteration }}</td>
                        <td class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-white lg:text-base md:text-base text-[10px] border border-amber-200/40">{{ $rp->created_at->format('d-m-Y H:i') }}</td>
                        <td class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-white lg:text-base md:text-base text-[10px] border border-amber-200/40">{{ $rp->order_id }}</td>
                        <td class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-white lg:text-base md:text-base text-[10px] border border-amber-200/40">{{ $rp->games->name }}</td>
                        <td class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-white lg:text-base md:text-base text-[10px] border border-amber-200/40">{{ number_format($rp->harga) }}</td>
                        <td class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-white lg:text-base md:text-base text-[10px] border border-amber-200/40 text-center">{{ $rp->qty }}</td>
                        <td class="lg:px-3 md:px-3 px-1 lg:py-2 md:py-2 py-1 text-green-400 lg:text-base md:text-base text-[10px] border border-amber-200/40 text-center">{{ $rp->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="flex w-full lg:h-70 md:h-52 h-16">
        @if (file_exists(public_path('image/bgS.png')))
            <img src="{{ asset('image/bgS.png') }}" alt="" class="w-full h-full object-cover">  
            
        @else
            <div class="w-full h-full animate-pulse bg-gray-200/20"></div>
        @endif
    </div>
</div>
