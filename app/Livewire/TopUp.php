<?php

namespace App\Livewire;

use App\Models\daftarGame;
use Livewire\Component;

class TopUp extends Component
{
    public $games;

    public $qty = 1;

    public function tambah()
    {
        $this->qty++;
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
                $q->with('iconsgames');
            }
        ])->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.top-up');
    }
}
