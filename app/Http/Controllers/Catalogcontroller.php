<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Catalogcontroller extends Controller
{ 
    public $catalog;

    public function __construct()
    {
        $this->catalog =   
        [
                     1 => ['category' => 'tv', 'brand' => 'Sony', 'name' => 'TV 42"', 'price' => 1000],
                     2 => ['category' => 'tv', 'brand' => 'Samsung', 'name' => 'TV 55"', 'price' => 800],
                     3 => ['category' => 'tv', 'brand' => 'LG', 'name' => 'TV 32"', 'price' => 800],
                     4 => ['category' => 'notebook', 'brand' => 'HP', 'name' => 'Notebook i7', 'price' => 750],
                     5 => ['category' => 'notebook', 'brand' => 'Lenovo', 'name' => 'Notebook i5', 'price' => 600],
                     6 => ['category' => 'notebook', 'brand' => 'Dell', 'name' => 'Notebook i3', 'price' => 400],
                     7 => ['category' => 'smartphone', 'brand' => 'Samsung', 'name' => 'S23', 'price' => 800],
                     8 => ['category' => 'smartphone', 'brand' => 'Apple', 'name' => 'iPhone 14', 'price' => 1000],
                     9 => ['category' => 'smartphone', 'brand' => 'Apple', 'name' => 'iPhone 14 Pro', 'price' => 1300],
                    10 => ['category' => 'tablet', 'brand' => 'Samsung', 'name' => 'Galaxy Tab', 'price' => 300],
                    11 => ['category' => 'tablet', 'brand' => 'Apple', 'name' => 'iPad', 'price' => 400],
                ];
    }
    public function viewCatalog() {

        $namePage = "Catalogo";

        $catalog = $this->catalog;

        $link = [];

        foreach($this->catalog as $item) {

            if(!in_array($item['category'], $link)) {

                $link[] = $item["category"];
            }
            
        }

        return view("Homepage.Catalogo.catalog", compact("namePage", "catalog", "link"));

    }

    public function viewArticle($id) {

        $namePage = $this->catalog[$id]["name"];

        $catalog = $this->catalog[$id];

        return view("Homepage.Catalogo.Articolo.article", compact("namePage", "catalog"));
    }

    public function inCategory($category) {

        $namePage = "Articoli per Categoria";

        $catalog = $this->catalog;

        $link = [];

        foreach($this->catalog as $item) {

            if(!in_array($item['category'], $link)) {

                $link[] = $item["category"];
            }
            
        }

        $catalogfiltered = [];

        foreach($catalog as $item) {

            if(in_array($category, $item)){

                $catalogfiltered[] = $item;
            }
        }

        return view("Homepage.Catalogo.PerCategoria.forcategory", compact("namePage", "catalogfiltered", "link"));
    }
}
