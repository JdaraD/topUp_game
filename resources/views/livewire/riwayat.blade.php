<div class="flex flex-col grow gap-4 justify-center items-center w-full h-full mt-27.5 select-none">
    <div class="flex h-full w-[80%] my-8">
        <table class="w-full border border-amber-200/40 rounded-lg overflow-hidden">
            <thead class="bg-amber-200/10">
                <tr>
                    <th class="px-3 py-2 text-white text-md border border-amber-200/40">No</th>
                    <th class="px-3 py-2 text-white text-md border border-amber-200/40">Tanggal</th>
                    <th class="px-3 py-2 text-white text-md border border-amber-200/40">Nomor Invoice</th>
                    <th class="px-3 py-2 text-white text-md border border-amber-200/40">Nama Game</th>
                    <th class="px-3 py-2 text-white text-md border border-amber-200/40">Harga</th>
                    <th class="px-3 py-2 text-white text-md border border-amber-200/40">Qty</th>
                    <th class="px-3 py-2 text-white text-md border border-amber-200/40">Status</th>
                </tr>
            </thead>

            <tbody wire:poll.3s="loadRiwayat">
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
                        <td class="px-3 py-2 text-white text-md border border-amber-200/40 text-center">{{ $loop->iteration }}</td>
                        <td class="px-3 py-2 text-white text-md border border-amber-200/40">{{ $rp->created_at->format('d-m-Y H:i') }}</td>
                        <td class="px-3 py-2 text-white text-md border border-amber-200/40">{{ $rp->order_id }}</td>
                        <td class="px-3 py-2 text-white text-md border border-amber-200/40">{{ $rp->games->name }}</td>
                        <td class="px-3 py-2 text-white text-md border border-amber-200/40">{{ number_format($rp->harga) }}</td>
                        <td class="px-3 py-2 text-white text-md border border-amber-200/40 text-center">{{ $rp->qty }}</td>
                        <td class="px-3 py-2 text-green-400 text-md border border-amber-200/40 text-center">{{ $rp->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="flex w-full h-70">
        @if (file_exists(public_path('image/bgS.png')))
            <img src="{{ asset('image/bgS.png') }}" alt="" class="w-full h-full object-cover">  
            
        @else
            <div class="w-full h-full animate-pulse bg-gray-200/20"></div>
        @endif
    </div>
</div>
