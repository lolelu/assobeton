<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use App\Repositories\EventRepository;

class NewsEvents extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.Events.news-events', [
            'events' => Event::published()->visible()->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->get(),
        ]);
    }
}
