<x-app-layout>
    <div class="container bg-gray-50">
        <div class="row justify-content-center">
            {{-- link back --}}
            <a href="{{ route('members.index') }}">Back</a>
            <img src="{{ $member->image('logo') }}" alt={{ $member->imageAltText('logo') }} width="100" height="100">
            <h1>{{ $member->title }}</h1>
            <p> {!! $member->description !!}</p>
            <p>{{ $member->website }}</p>
            <p>{{ $member->email }}</p>
            <p>{{ $member->phone }}</p>
            <p>{{ $member->address }}</p>





        </div>
    </div>




</x-app-layout>
