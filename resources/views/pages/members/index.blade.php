<x-app-layout>
    <x-slot name="header">
        {{ __('Soci Assobeton') }}

    </x-slot>
    <div class="mx-auto container bg-gray-50">
        <div class="row justify-content-center">


            <table>
                @foreach ($members as $member)
                    <tr>
                        <td><img src="{{ $member->image('logo') }}" alt={{ $member->imageAltText('logo') }} width="100"
                                height="100"></td>
                        <td>{{ $member->title }}</td>

                        <td><a href="{{ route('soci.show', $member->slug) }}">View</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>




</x-app-layout>
