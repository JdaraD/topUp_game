<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if ($profil)
        <title>{{ session('title', $profil->name) }}</title>
        
        <link rel="icon" href="{{asset('storage/'. $profil->gambar)}}" type="image/x-icon">
    @endif

    {{-- @livewireStyles --}}
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/home.js'])

    {{-- @vite('resources/css/app.css') --}}
</head>
<body class="flex flex-col bg-[#262727] h-full font-sans">
    {{-- @livewireScripts --}}

    @if (!request()->routeIs('filament.admin.auth.login') && !request()->routeIs('login') && !request()->routeIs('register'))
        @livewire('layouts.header') <!-- Menampilkan komponen header -->
        {{-- @livewire('navbar') <!-- Menampilkan komponen navbar --> --}}
    @endif

    {{-- <main class="grow"> --}}
        {{ $slot }}
    {{-- </main> --}}

    @if (!request()->routeIs('filament.admin.auth.login') && !request()->routeIs('login') && !request()->routeIs('register'))
        @livewire('layouts.footer')
    @endif

    @yield('content')

    @livewireScripts
</body>
</html>