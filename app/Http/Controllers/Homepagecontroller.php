<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepagecontroller extends Controller
{


    public function homepageView() {

        $namePage = "Homepage";

        $title = "Catalogo";

        $description = "Negozio di elettronica e tecnologia, contenente migliaia di articoli delle migliori marche sul mercato. Pc, laptop, workstations, server, accessori, monitor, HD e molto altro!
        Tutti i prodotti sono foriniti da un’azienda leader specializzata nel settore.";
        
        return view('Homepage.homepage', compact("namePage", "title", "description"));

    }
}
