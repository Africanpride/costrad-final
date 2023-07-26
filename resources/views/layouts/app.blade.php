<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth">

<head>
    <meta charset="utf-8">
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

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
    <!-- FlatPickr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/c5sr22drdl0nd8bowu0ulmfv099eqz9u5dgvs43lheth4hl7/tinymce/6/tinymce.min.js"
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}


    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body
    class="bg-gray-100 dark:bg-black grid md:grid-cols-12 scrollbar-thin
scrollbar-thumb-firefly-800 scrollbar-track-gray-300 overflow-x-hidden overflow-y-scroll ">

    <div class="md:col-span-2 w-full relative">
        @livewire('cookie')

        <!-- Navigation -->
        @livewire('layout.navigation')
        <!-- End Navigation -->
    </div>
    <div class="md:col-span-10 w-full overflow-x-hidden">

        <!-- Content -->
        <div class="bg-gray-50 dark:bg-black w-full ">
            <!-- ========== HEADER ========== -->
            @livewire('layout.header')
            <!-- Sidebar Toggle -->
            @livewire('layout.sidebar-toggle')
            <!-- End Sidebar Toggle -->
            <!-- ========== END HEADER ========== -->
            {{ $slot }}
            <!-- Footer -->
            @livewire('layout.footer')
            <!-- End Footer -->
        </div>
        <!-- End Content -->

    </div>


    <!-- ========== MODALS ========== -->
    <div>
        @livewire('layout.all-modals')
    </div>

    <!-- ========== END MODALS CONTENT ========== -->
    @livewire('livewire-ui-slideover')
    @livewire('livewire-ui-modal')
    @stack('modals')


    @livewireScripts
    @stack('scripts')
    <fc:scripts />
</body>

</html>
