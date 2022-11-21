<?php

namespace App\Http\Controllers;

use App\Repositories\GruppiMerceologiciRepository;
use Illuminate\Http\Request;

class GruppiMerceologiciController extends Controller
{
    //
    public function __construct(GruppiMerceologiciRepository $gruppiRepository)
    {
        $this->eventRepository = $gruppiRepository;
    }

    public function index()
    {
        $gruppi = $this->eventRepository->allPublished();

        return view('pages.gruppi_merceologici.index', [
            'gruppi' => $gruppi,
        ]);
    }

    public function show($slug)
    {
        $gruppo = $this->eventRepository->forSlug($slug);

        abort_unless($gruppo, 404, "Gruppo non trovato");
        if ($gruppo->slug != $slug) {
            return redirect()->route('gruppi_merceologici.show', $gruppo->slug, 301);
        }
        return view('pages.gruppi_merceologici.show', [
            'gruppo' => $gruppo,
        ]);
    }
}
