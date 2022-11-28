<x-app-layout>
    <x-slot name="header">
        {{ __('Soci Assobeton') }}

    </x-slot>
    <div class="mx-auto container bg-gray-50">
        <div class="flex justify-content-center gap-4">


            @foreach ($members as $member)
                <div class=" bg-pri">
                    <img src="{{ $member->image('logo') }}" alt={{ $member->imageAltText('logo') }} width="100"
                        height="100">
                    {{ $member->title }}

                    <a href="{{ route('soci.show', $member->slug) }}">View</a>
                </div>
            @endforeach

        </div>
    </div>




</x-app-layout>
