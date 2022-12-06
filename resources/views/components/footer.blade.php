<footer class="px-4 py-16 mx-auto max-w-7xl">
    <nav class="grid grid-cols-2 gap-12 mb-12 md:grid-cols-3 lg:grid-cols-5">
        <div>
            <p class="mb-4 text-base font-medium text-primary">ASSOCIAZIONE</p>
            <a class="flex mb-3 text-sm font-medium text-gray-700 transition md:mb-2 hover:text-primary"
                href="#">Chi siamo</a>
            <a class="flex mb-3 text-sm font-medium text-gray-700 transition md:mb-2 hover:text-primary" href="#">La
                storia</a>
            <a class="flex mb-3 text-sm font-medium text-gray-700 transition md:mb-2 hover:text-primary"
                href="#">Organi Associativi</a>
        </div>

        {{-- Chi siamo, La storia, Organi Associativi --}}
        <div>


            <p class="mb-4 text-base font-medium text-primary">GRUPPI MERCEOLOGICI</p>
            @foreach ($gruppiMerceologici as $gruppo)
                <a class="flex mb-3 text-sm font-medium text-gray-700 transition md:mb-2 hover:text-primary"
                    href="{{ route('gruppi_merceologici.index') . '/' . $gruppo->slug }}">{{ $gruppo->title }}</a>
            @endforeach
            {{-- Blocchi e Pavimenti, Cabine elettriche,  Calcestruzzo cellulare, Fibrocemento, Inserti, Pali, Solai e doppia lastra, Strutture, Traverse, Tubi a bassa pressione, Tubi ad alta pressione --}}

        </div>
        <div>
            {{-- For each in blade --}}
            {{-- @foreach (GruppiMerceologiciRepository::allPublished() as $gruppoMerceologico)
            @endforeach --}}


            <p class="mb-4 text-base font-medium text-primary">SERVIZI</p>

            {{-- CCNL, Comunicazione e promozione, Consulenze tecniche mirate, Formazione e informazione, Negoziazione, Normazione, Progetti di ricerca, Rappresentanza e lobbying, Indice di prefabbricazione --}}
            <a class="flex mb-3 text-sm font-medium text-gray-700 transition md:mb-2 hover:text-primary"
                href="#">CCNL</a>
            <a class="flex mb-3 text-sm font-medium text-gray-700 transition md:mb-2 hover:text-primary"
                href="#">Comunicazione e promozione</a>
            <a class="flex mb-3 text-sm font-medium text-gray-700 transition md:mb-2 hover:text-primary"
                href="#">Consulenze tecniche mirate</a>
            <a class="flex mb-3 text-sm font-medium text-gray-700 transition md:mb-2 hover:text-primary"
                href="#">Formazione e informazione</a>
            <a class="flex mb-3 text-sm font-medium text-gray-700 transition md:mb-2 hover:text-primary"
                href="#">Negoziazione</a>
            <a class="flex mb-3 text-sm font-medium text-gray-700 transition md:mb-2 hover:text-primary"
                href="#">Normazione</a>
            <a class="flex mb-3 text-sm font-medium text-gray-700 transition md:mb-2 hover:text-primary"
                href="#">Progetti di ricerca</a>
            <a class="flex mb-3 text-sm font-medium text-gray-700 transition md:mb-2 hover:text-primary"
                href="#">Rappresentanza e lobbying</a>
            <a class="flex mb-3 text-sm font-medium text-gray-700 transition md:mb-2 hover:text-primary"
                href="#">Indice di prefabbricazione</a>


        </div>
        <div>
            <p class="mb-4 text-sm font-medium text-primary">PUBBLICAZIONI</p>
            <p class="mb-4 text-sm font-medium text-primary">NEWS ED EVENTI</p>
            <p class="mb-4 text-sm font-medium text-primary">UNISCITI ALL'ASSOCIAZIONE</p>

        </div>

    </nav>
    <div class="flex flex-col items-center justify-end md:flex-row">

        <p class="text-sm text-center text-gray-600 md:text-left">© 2022 Assobeton</p>
    </div>
</footer>
