<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Soci') }}
        </h2>
    </x-slot>
    <div class="mx-auto container bg-gray-50">
        <div class="row justify-content-center">


            <table>
                @foreach ($gruppi as $gruppo)
                    <div> {{ $gruppo->title }}</div>
                    <a href="{{ route('gruppi_merceologici.show', $gruppo->slug) }}">View</a>
                @endforeach
            </table>
        </div>
    </div>




</x-app-layout>
