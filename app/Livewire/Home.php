<?php

namespace App\Livewire;

use App\Models\daftarGame;
use App\Models\headerBanner;
use App\Models\imageSlider;
use Livewire\Component;

class Home extends Component
{
    public $bannerTop;
    public $slideImage = [];

    public $games;

    public function loadgames()
    {
        $this->games = daftarGame::where('is_active', 1)
            ->latest()
            ->get();
    }

    public function loadBannerTop()
    {
        $this->bannerTop = headerBanner::where('is_active', true)
            ->latest()
            ->take(1)
            ->get();
    }
    public function loadSlideImage()
    {
        $this->slideImage = imageSlider::query()
            ->where('is_active', true)
            ->latest()
            ->get();
    }

    public function mount()
    {
        $this->loadgames();
        $this->loadSlideImage();
        $this->loadBannerTop();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
