<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ session('title', 'Page Title') }}</title>

    @livewireStyles
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body>
    @livewireScripts
    <div class="relative z-50">
        @if (!request()->routeIs('filament.admin.auth.login'))
            @livewire('layouts.header') <!-- Menampilkan komponen header -->
            {{-- @livewire('navbar') <!-- Menampilkan komponen navbar --> --}}
        @endif
    </div>

    <div class="relative z-10">
        {{ $slot }}
    </div>

    <div>
        @if (!request()->routeIs('filament.admin.auth.login'))
            @livewire('layouts.footer')
        @endif
    </div>

    @yield('content')

    @livewireScripts
</body>
</html>