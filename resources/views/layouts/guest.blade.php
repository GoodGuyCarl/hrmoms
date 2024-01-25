<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans text-gray-900 antialiased">
<div
    style="background-image: url({{ asset('scm_bg.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover">
    <div class="flex justify-center items-center min-h-screen leading-tight">
        <div
            class="flex flex-col max-w-lg mx-auto justify-center self-center bg-[#377037] bg-opacity-90 p-5 rounded-xl shadow-lg">
            {{ $slot }}
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
