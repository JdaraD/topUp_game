<?php

namespace App\Livewire\Auth;

use App\Models\profil;
use Livewire\Component;

class LoginFrom extends Component
{
    public $profil;

    public function loadProfil() 
    {
        $this->profil = profil::where('is_active', 1)
            ->latest()
            ->first();
    }

    function mount()
    {
        $this->loadProfil();
    }

    public function render()
    {
        return view('livewire.auth.login-from');
    }
}
