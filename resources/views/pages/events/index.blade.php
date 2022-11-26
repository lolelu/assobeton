<x-app-layout>
    <x-slot name="header">
        {{ __('Eventi') }}
    </x-slot>
    <div class="mx-auto container bg-gray-50">
        <div class="row justify-content-center">


            <table>
                @foreach ($events as $event)
                    <tr>
                        <td><img src="{{ $event->image('logo') }}" alt={{ $event->imageAltText('logo') }} width="100"
                                height="100"></td>
                        <td>{{ $event->title }}</td>

                        <td><a href="{{ route('news_eventi.show', $event->slug) }}">View</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>




</x-app-layout>
