<x-app-layout>

    <div class="container bg-gray-50">
        <div class="row justify-content-center">
            {{-- link back --}}
            <a href="{{ route('gruppi_merceologici.index') }}">Back</a>

            <h1>{{ $gruppo->title }}</h1>
            <h2>{{ $gruppo->subtitle }}</h2>
            <p> {!! $gruppo->description !!}</p>
            {!! $gruppo->renderBlocks() !!}
            <img src="{{ $gruppo->image('thumbnail') }}" alt={{ $gruppo->imageAltText('thumbnail') }} width="100"
                height="100">

            {{-- cycle through $gruppo->loadRelated('members')->all()  --}}

            {{-- cycle through $gruppo->loadRelated('members')->all()  --}}
        </div>
    </div>




</x-app-layout>
