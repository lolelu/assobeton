<div class="space-y-8">
    <h1>MAIN NEWS AND EVENTS</h1>
    @foreach ($mainNews as $news)
        <div class="flex flex-col md:flex-row">

            <div class="w-full md:w-1/2">
                <h2>{{ $news->title }}</h2>
                <p>{{ $news->description }}</p>
                <a href={{ route('news_eventi.show', $news->slug) }}> {{ $news->slug }} </a>
            </div>
        </div>
    @endforeach


    <h2>SECONDARY NEWS AND EVENTS</h2>
    @foreach ($featuredNews as $news)
        <div class="flex flex-col md:flex-row">

            <div class="w-full md:w-1/2">
                <h2>{{ $news->title }}</h2>
                <p>{{ $news->description }}</p>
                <a href={{ route('news_eventi.show', $news->slug) }}> {{ $news->slug }} </a>
            </div>
        </div>
    @endforeach

    <h1>MAIN PUBBLICAZIONI</h1>
    {{ $mainPubblicazioni }}

    <h2>SECONDARY PUBBLICAZIONI</h2>
    {{ $featuredPubblicazioni }}

    {{-- <h1>MAIN COMUNICATI</h1>
    {{ $mainComunicati }}

    <h2>SECONDARY COMUNICATI</h2>
    {{ $featuredComunicati }} --}}

</div>
