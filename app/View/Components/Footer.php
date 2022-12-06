<?php

namespace App\View\Components;

use App\Models\GruppiMerceologici;
// use App\Models\Servizi;
use Illuminate\View\Component;

class Footer extends Component
{
    public $gruppiMerceologici;


    /**
     * Create the component instance.
     * @return void
     */


    public function __construct()
    {
        $this->gruppiMerceologici = GruppiMerceologici::published()->orderBy('position')->get();

        // $this->servizi = Servizi::published()->orderBy('position')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
