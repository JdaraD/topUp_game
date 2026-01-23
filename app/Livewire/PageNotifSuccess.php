<?php

namespace App\Livewire;

use App\Models\profil;
use App\Models\riwayatPembelian;
use Livewire\Component;

class PageNotifSuccess extends Component
{
    public $profil;
    public $order;

    public function loadprofil()
    {
        $this->profil = profil::where('is_active', 1)
            ->latest()
            ->first();
    }

    public function mount()
    {
        $this->loadprofil();
        $orderId = request()->query('order_id');

        $this->order = riwayatPembelian::where('order_id', $orderId)->first();
    }

    public function render()
    {
        $order = riwayatPembelian::latest()->first();

        return view('livewire.page-notif-success');
    }
}
