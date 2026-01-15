<?php

namespace App\Livewire;

use App\Models\profil;
use Livewire\Component;

class PageNotifSuccess extends Component
{
    public $profil;

    public function loadprofil()
    {
        $this->profil = profil::where('is_active', 1)
            ->latest()
            ->first();
    }

    public function mount()
    {
        $this->loadprofil();
    }

    public function render()
    {
        return view('livewire.page-notif-success');
    }
}
