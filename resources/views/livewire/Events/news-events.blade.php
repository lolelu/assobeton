<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <input wire:model="search" class="" id="search" type="text" placeholder="Search">
    {{-- search --}}
    <div class="flex justify-center">
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
