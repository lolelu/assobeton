<x-app-layout>
    <x-slot name="header">
        {{ __('Soci') }}

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
