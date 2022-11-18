<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Repositories\EventRepository;

class NewsEventiController extends Controller
{
    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function index()
    {
        $events = $this->eventRepository->allPublished();

        return view('pages.events.index', [
            'events' => $events,
        ]);
    }

    public function show($slug)
    {
        $event = $this->eventRepository->forSlug($slug);

        abort_unless($event, 404, "Evento non trovato");
        if ($event->slug != $slug) {
            return redirect()->route('news_events.show', $event->slug, 301);
        }
        return view('pages.events.show', [
            'event' => $event,
        ]);
    }
    //

}
