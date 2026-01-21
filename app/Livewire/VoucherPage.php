<?php

namespace App\Livewire;

use App\Models\profil;
use App\Models\voucher;
use Livewire\Component;

class VoucherPage extends Component
{

    public $voucher;
    public $profil;

    public function loadProfil()
    {
        $this->profil = profil::where('is_active',1)->first();
    }

    public function loadVoucher()
    {
        $this->voucher = voucher::where('is_active',1)
        ->first();
    }

    public function mount()
    {
        $this->loadVoucher();
        $this->loadProfil();
    }
    public function render()
    {
        return view('livewire.voucher-page');
    }
}
