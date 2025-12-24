<?php

use App\Livewire\Auth\LoginFrom;
use App\Livewire\Auth\RegisterFrom;
use App\Livewire\Home;
use App\Livewire\TopUp;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/',Home::class)->name('home');
route::get('/login', LoginFrom::class)->name('login');
route::get('/register', RegisterFrom::class)->name('register');
route::get('/top-up', TopUp::class)->name('top-up');