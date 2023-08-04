<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $links;

    public function __construct()
    {
        $this->links = [route('Homepage') =>"Homepage", route("Catalog") => "Catalogo Articoli"];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar', ["links" => $this->links]);
    }
}
