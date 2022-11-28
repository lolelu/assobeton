<x-app-layout>
    <x-slot name="header">
        {{ __('Soci') }}

    </x-slot>
    <div class="mx-auto container bg-gray-50">
        <div class="justify-content-center flex">


            @foreach ($gruppi as $gruppo)
                <div>
                    <div> {{ $gruppo->title }}</div>
                    <a href="{{ route('gruppi_merceologici.show', $gruppo->slug) }}">View</a>
                </div>
            @endforeach

        </div>
    </div>




</x-app-layout>
