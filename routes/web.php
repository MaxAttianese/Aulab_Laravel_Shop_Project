<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homepagecontroller;

use App\Http\Controllers\Catalogcontroller;


Route::get('/', [Homepagecontroller::class, "homepageView"])->name("Homepage");

Route::get('/catalog', [Catalogcontroller::class, "viewCatalog"])->name("Catalog");

Route::get('/catalog/{id}', [Catalogcontroller::class, "viewArticle"])->name("Catalog.article");

Route::get('/catalog/categoria/{category}', [Catalogcontroller::class, "inCategory"])->name("Catalog.category");

