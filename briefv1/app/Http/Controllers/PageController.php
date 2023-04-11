<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function accueil()
    {
        $title = 'Accueil';
        return view('accueil', compact('title'));
    }

    public function soinsDuCorps()
    {
        $title = 'Soins du corps';
        return view('soins-du-corps', compact('title'));
    }

    public function soinsDuVisage()
    {
        $title = 'Soins du visage';
        return view('soins-du-visage', compact('title'));
    }

    public function maquillage()
    {
        $title = 'Maquillage';
        return view('maquillage', compact('title'));
    }

    public function beauteDesMains()
    {
        $title = 'Beauté des mains';
        return view('beaute-des-mains', compact('title'));
    }
}
