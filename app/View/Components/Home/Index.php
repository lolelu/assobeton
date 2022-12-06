<?php

namespace App\View\Components\Home;

use A17\Twill\Models\Feature;

use Illuminate\View\Component;

class Index extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $featuredNews;
    public $mainNews;
    public $mainPubblicazioni;
    public $featuredPubblicazioni;
    public $mainComunicati;
    public $featuredComunicati;

    public function __construct()
    {
        $this->mainNews = Feature::forBucket('events_primary_feature');
        $this->featuredNews = Feature::forBucket('events_secondary_features');
        $this->mainPubblicazioni = Feature::forBucket('pubblicazioni_primary_feature');
        $this->featuredPubblicazioni = Feature::forBucket('pubblicazioni_secondary_features');
        $this->mainComunicati = Feature::forBucket('comunicati_primary_feature');
        $this->featuredComunicati = Feature::forBucket('comunicati_secondary_features');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.index');
    }
}
