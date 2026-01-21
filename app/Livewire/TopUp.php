<?php

namespace App\Livewire;

use App\Models\daftarGame;
use App\Models\riwayatPembelian;
use App\Models\voucher;
use Livewire\Component;
use Midtrans\Snap;

class TopUp extends Component
{
    public $voucherCode = '';
    public $diskon = 0;
    public $hasVoucher = false;
    public $games;
    public $selectedPrice = null;
    public $Mid;
    public $server;
    public $harga = 0;
    public $qty = 1;
    public $voucher = null;

    public $email, $noWa;

    public function applyDiskon()
    {
        $voucher = voucher::where('code', $this->voucherCode)
            ->where('is_active', 1)
            ->first();

        if (! $voucher) {
            $this->hasVoucher = false;
            $this->diskon = 0;
            return;
        }

        $this->diskon = (int) $voucher->diskon;
        $this->hasVoucher = true;
    }


    public function tambah()
    {
        if ($this->qty < 3) {
            $this->qty++;
        }
    }

    public function kurang()
    {
        if ($this->qty > 1) {
            $this->qty--;
        }
    }

    public function mount($id)
    {
        $this->games = daftarGame::with([
            'priceGames' => function ($q) {
                $q->with('iconsgames','game');
            }
        ])->findOrFail($id);
    }

    public function selectPrice($priceId)
    {
        $this->selectedPrice = $this->games
            ->priceGames
            ->firstWhere('id', $priceId);
        
        $this->harga = $this->selectedPrice->harga ?? 0;

        $this->voucher = null;
        $this->diskon = 0;
    }

    // hitung total
    public function getTotalProperty()
    {
        $total = $this->qty * $this->harga;

        if ($this->hasVoucher) {
            return (int) ($total - ($total * ($this->diskon / 100)));
        }

        return (int) $total;
    }

    public function submit()
    {
        if(!$this->selectedPrice) {
            $this->addError('selectedPrice', 'Silahkan pilih harga terlebih dahulu.');
            return;
        }

        $this->validate([
            'Mid' => 'required',
            'server' => 'required',
            'email' => 'required',
            'noWa' => 'required',
        ]);

        $order =riwayatPembelian::create([
            'Mid' => $this->Mid,
            'server' => $this->server,
            'daftar_game_id' => $this->games->id,
            'price_game_id' => $this->selectedPrice->id,
            'qty' => $this->qty,
            'email' => $this->email,
            'noWa' => $this->noWa,
            'harga' => $this->getTotalProperty(),
            'diskon' => $this->hasVoucher ? $this->diskon : 0,
            'status' => 'pending',
        ]);

        $params = [
            'transaction_details' => [
                'order_id' => $order->id,
                'gross_amount' => $this->getTotalProperty(),
            ],
            'customer_details' => [
                'email' => $this->email,
                'phone' => $this->noWa,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        $order->update([
            'snap_token' => $snapToken,
        ]);

        $this->dispatch('midtrans-snap', snapToken: $snapToken);


        $this->reset(['Mid', 'server', 'qty', 'harga', 'diskon', 'voucherCode', 'hasVoucher', 'selectedPrice', 'email', 'noWa']);

        session()->flash('success', 'Transaksi berhasil dibuat');

    }


    public function render()
    {
        return view('livewire.top-up');
    }
}
