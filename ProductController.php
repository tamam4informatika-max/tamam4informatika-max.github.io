<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = \App\Models\Product::with('images')
            ->where('slug', $slug)
            ->firstOrfail();

        return view('front.products.show', compact('product'));
    }
}
