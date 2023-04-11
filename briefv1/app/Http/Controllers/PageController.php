<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function accueil()
    {
        // Call the index() method of ProductController
        $products = app(ProductController::class)->index();

        $title = 'Accueil'; // Set the title for the view

        // Pass the products and title to the view for display
        return view('accueil', compact('products', 'title'));
    }

    public function detail($id)
    {
        $product = Product::find($id); // Récupérer le produit correspondant à l'identifiant
        $title = 'Details du produit';
        return view('detail-produit', ['product' => $product], compact('title')); // Passer le produit à la vue 'detail-produit'
    }

    public function soinsDuCorps()
    {
        $title = 'Soins du corps';
        $products = Product::where('category_id', 2)->get();
        return view('soins-du-corps', ['products' => $products], compact('title'));
    }

    public function soinsDuVisage()
    {
        $title = 'Soins du visage';
        $products = Product::where('category_id', 3)->get();
        return view('soins-du-visage', ['products' => $products], compact('title'));
    }

    public function maquillage()
    {
        $title = 'Maquillage';
        $products = Product::where('category_id', 4)->get();
        return view('maquillage', ['products' => $products], compact('title'));
    }

    public function beauteDesMains()
    {
        $title = 'Beauté des mains';
        $products = Product::where('category_id', 5)->get();
        return view('beaute-des-mains', ['products' => $products], compact('title'));
    }
}
