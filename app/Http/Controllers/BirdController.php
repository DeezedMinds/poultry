<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subcategory;
use App\Models\ProductSubcategory;
use Illuminate\Http\Request;

class BirdController extends Controller
{
    public function index()
    {
        $subcategoryIds = Subcategory::birds()->pluck('id');
        $productsIds = ProductSubcategory::whereIn('subcategory_id', $subcategoryIds)->get()->unique('product_id')->pluck('product_id');
        $products = Product::whereIn('id', $productsIds)->featured()->take(4)->get();

        return view('pages.aves')->with([
            'featured' => $products
        ]);
    }
}
