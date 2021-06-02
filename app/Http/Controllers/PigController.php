<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\ProductSubcategory;

class PigController extends Controller
{
    public function index()
    {
        $subcategoryIds = Subcategory::pigs()->pluck('id');
        $productsIds = ProductSubcategory::whereIn('subcategory_id', $subcategoryIds)->get()->unique('product_id')->pluck('product_id');
        $products = Product::whereIn('id', $productsIds)->featured()->take(4)->get();

        return view('pages.cerdos')->with([
            'featured' => $products
        ]);
    }
}
