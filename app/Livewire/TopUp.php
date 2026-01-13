<?php

namespace App\Livewire;

use App\Models\daftarGame;
use Livewire\Component;

class TopUp extends Component
{
    public $games;

    public function mount($id)
    {
        $this->games = daftarGame::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.top-up');
    }
}
