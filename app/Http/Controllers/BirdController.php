<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class BirdController extends Controller
{
    public function index()
    {
        $ids = Subcategory::birds()->pluck('id');
        $products = Product::whereIn('subcategory_id', $ids)->featured()->take(4)->get();

        return view('pages.aves')->with([
            'featured' => $products
        ]);
    }
}
