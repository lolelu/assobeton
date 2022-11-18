<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eventi') }}
        </h2>
    </x-slot>
    <div class="mx-auto container bg-gray-50">

        {{ $event->title }}
        {{ $event->description }}

        {!! $event->renderBlocks() !!}
    </div>




</x-app-layout>
