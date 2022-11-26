<x-app-layout>

    <x-slot name="header">
        {{ __('Eventi') }}
    </x-slot>

    <div class="mx-auto container bg-gray-50">
        <div class="row justify-content-center">

            <div>
                @foreach ($primaryFeatured as $featured)
                    <div>{{ $featured }}</div>
                @endforeach
                <div class="h-4 bg-black w-full"></div>

                @foreach ($secondaryFeatured as $featured)
                    <div>{{ $featured }}</div>
                @endforeach


            </div>
        </div>
    </div>




</x-app-layout>
