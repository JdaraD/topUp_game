<?php

namespace App\Livewire;

use App\Models\imageSlider;
use Livewire\Component;

class Home extends Component
{
    public $slideImage = [];

    public function loadSlideImage()
    {
        $this->slideImage = imageSlider::query()
            ->where('is_active', true)
            ->latest()
            ->get();
    }

    public function mount()
    {
        $this->loadSlideImage();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
