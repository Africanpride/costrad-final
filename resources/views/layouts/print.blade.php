<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'College of Sustainable Transformation & Development') }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>


    @livewireStyles

    <!-- Required Meta Tags Always Come First -->
    @stack('scripts')
</head>

<body
    class="bg-firefly-100 dark:bg-firefly-900  scrollbar-thin
scrollbar-thumb-firefly-800 dark:scrollbar-thumb-firefly-900 scrollbar-track-gray-300 overflow-y-scroll overflow-x-hidden">


    <main id="content" role="main"
        class="bg-gray-50 dark:bg-firefly-900 dark:text-gray-50 md:min-h-screen overflow-x-hidden ">

        {{ $slot }}

    </main>



</body>

</html>
