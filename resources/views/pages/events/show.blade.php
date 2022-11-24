<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eventi') }}
        </h2>
    </x-slot>
    <div class="mx-auto container">

        <div class=" text-center my-12">
            <h1>{{ $event->title }}</h1>
            <h2>{{ $event->subtitle }}</h2>
            <p>{!! $event->description !!} </p>
            @if ($event->event == true)
                <p>Evento dal {{ $event->publish_start_date }} al {{ $event->publish_end_date }}</p>
            @else
                <p>Evento del {{ date($event->publish_start_date) }}</p>
            @endif

        </div>


        {!! $event->renderNamedBlocks('Contenuto') !!}


        {!! $event->renderNamedBlocks('Files') !!}


    </div>




</x-app-layout>
