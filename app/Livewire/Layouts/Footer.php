<?php

namespace App\Livewire\Layouts;

use App\Models\profil;
use Livewire\Component;

class Footer extends Component
{
    public $profil;

    public function loadProfil()
    {
        $this->profil = profil::where('is_active',1)
            ->latest()
            ->take(1)
            ->get();
    }

    public function mount()
    {
        $this->loadProfil();
    }

    public function render()
    {
        return view('livewire.layouts.footer');
    }
}
