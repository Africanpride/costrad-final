<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEOMeta::generate() !!}
    {{-- {!! OpenGraph::generate() !!} --}}
    {!! Twitter::generate() !!}


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    {{-- <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script> --}}


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('scripts')
</head>

<body
    class="bg-firefly-100 dark:bg-firefly-900  scrollbar-thin relative
scrollbar-thumb-firefly-800 dark:scrollbar-thumb-firefly-900 scrollbar-track-gray-300
overflow-y-scroll overflow-x-hidden">
    <!-- Add this div for the loading spinner -->


    @livewire('cookie')
    <x-up-next />
    <!-- ========== HEADER ========== -->
    @livewire('layout.main.header')
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main"
        class="bg-gray-50 dark:bg-firefly-900 dark:text-white md:min-h-screen overflow-x-hidden ">

        {{ $slot }}

    </main>

    <!-- Footer -->
    @livewire('layout.footer')
    <!-- End Footer -->
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- JS Implementing Plugins -->
    {{-- <script src="./assets/vendor/preline/dist/preline.js"></script> --}}
    <fc:scripts />
    @livewireScripts

</body>

</html>
