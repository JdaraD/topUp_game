<?php

namespace App\Livewire;

use App\Models\riwayatPembelian;
use Livewire\Component;

class Riwayat extends Component
{
    public $riwayatPembelian = [];

    public function loadRiwayat()
    {
        $this->riwayatPembelian = riwayatPembelian::with('games', 'price')
            ->latest()
            ->limit(10)
            ->get();
    }

    public function mount()
    {
        $this->loadRiwayat();
    }

    public function render()
    {
        return view('livewire.riwayat');
    }
}
