<?php

namespace App\Livewire;

use App\Models\daftarGame;
use App\Models\voucher;
use Livewire\Component;

class TopUp extends Component
{
    public $diskon = null;
    public $games;
    public $selectedPrice = null;
    public $Mid;
    public $server;
    public $harga = 0;
    public $qty = 1;
    public $voucher;

    public function applyDiskon()
    {
        $this->resetErrorBag();

        $voucher = voucher::where('code', $this->diskon)
            ->where('is_active', 1)
            ->first();

        if(! $voucher) {
            $this->voucher = null;
            $this->diskon = 0;
            $this->addError('diskon', 'Kode voucher tidak ditemukan');
            return;
        }

        $this->voucher =$voucher;

        $this->diskon = $voucher->value;
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
    }

    // hitung total
    public function getTotalProperty()
    {
        return (int) $this->qty * (int) $this->harga;
    }

    // perview real time
    // protected $rules = [
    //     'Mid' => 'required',
    //     'server' => 'required',
    // ];

    public function submit()
    {
        // $this->validate([
        //     ''
        // ]);
    }


    public function render()
    {
        return view('livewire.top-up');
    }
}
