<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        <header style="background-image: url('{{ asset('images/header_fill.png') }}')" class="bg-cover bg-left  ">


            {{-- TODO: muovi h- nelle due componenti --}}
            <div class="flex flex-col max-w-7xl mx-auto  pt-8 pb-16 px-6 sm:px-6 lg:px-14 space-y-40">
                <nav class=" grow">
                    @include('layouts.navigation')
                </nav>

                <!-- Page Heading -->
                @if (isset($header))
                    <div class="flex flex-col justify-end">
                        <h2 class="  text-white text-7xl font-extrabold leading-tight ">
                            {{ $header }}
                        </h2>
                    </div>
                @endif
            </div>

        </header>


        <!-- Page Content -->
        <main class="max-w-7xl mx-auto">
            {{ $slot }}
        </main>
    </div>


    <x-footer />

    @livewireScripts
</body>

</html>
