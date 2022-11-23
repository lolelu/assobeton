<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eventi') }}
        </h2>
    </x-slot>
    <div class="mx-auto container bg-gray-50">

        {{ $item->title }}
        {!! $item->description !!}

        {!! $item->renderNamedBlocks('Contenuto') !!}


        {!! $item->renderNamedBlocks('Files') !!}


    </div>




</x-app-layout>
