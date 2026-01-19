<?php

namespace App\Livewire;

use App\Models\daftarGame;
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

    public function applyDiskon()
    {
        if (is_null($this->diskon) || $this->diskon === '') {
        return;
    }

        $this->diskon = intval($this->diskon);
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
        // logic submit
    }


    public function render()
    {
        return view('livewire.top-up');
    }
}
