<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ session('title', 'Page Title') }}</title>

    {{-- @livewireStyles --}}
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @vite('resources/css/app.css') --}}
</head>
<body class="flex flex-col min-h-screen font-sans">
    {{-- @livewireScripts --}}

    @if (!request()->routeIs('filament.admin.auth.login'))
        @livewire('layouts.header') <!-- Menampilkan komponen header -->
        {{-- @livewire('navbar') <!-- Menampilkan komponen navbar --> --}}
    @endif

    {{-- <main class="grow"> --}}
        {{ $slot }}
    {{-- </main> --}}

    @if (!request()->routeIs('filament.admin.auth.login'))
        @livewire('layouts.footer')
    @endif

    @yield('content')

    @vite('resources/js/home.js')
    @livewireScripts
</body>
</html>