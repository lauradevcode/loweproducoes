<!DOCTYPE html>
{{--@php use Illuminate\Support\Facades\Vite;use Modules\Management\Nova\Settings\PageSetting; @endphp--}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-core.gtm-head/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LOWE PRODUÇÕES</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('/build/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/simplebar/simplebar.min.css') }}">
    @livewireStyles
    @include('developer-by::developer-by-head')
    <x-core.favicon/>
    @stack('headJS')
</head>

<body class="w-full min-h-screen font-sans antialiased text-white">
<x-core.gtm-body/>
@include('partials.header')
<main class="flex-grow overflow-x-hidden">
    @yield('content')
</main>
@include('partials.footer')
@include('developer-by::developer-by-body')
@livewireScriptConfig
<script src="{{ asset('/build/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('/build/flowbite/flowbite.js') }}"></script>
<script src="{{ asset('/build/simplebar/simplebar.min.js') }}"></script>
@stack('js')
<x-core.livewire-refresh-production/>
</body>
</html>
