<?php

namespace App\Livewire\Layouts;

use App\Models\colorSetting;
use App\Models\profil;
use Livewire\Component;

class Header extends Component
{
    public $profil;

    public $colorheader;

    public function loadcolorheader()
    {
        $this->colorheader = colorSetting::where('is_active', 1)
            ->latest()
            ->first();
    }

    public function loadProfil() 
    {
        $this->profil = profil::where('is_active', 1)
            ->latest()
            ->first();
    }

    public function mount()
    {
        $this->loadcolorheader();
        $this->loadProfil();
    }

    public function render()
    {
        return view('livewire.layouts.header');
    }
}
