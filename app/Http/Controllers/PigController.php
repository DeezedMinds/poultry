<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;

class PigController extends Controller
{
    public function index()
    {
        $ids = Subcategory::pigs()->pluck('id');
        $products = Product::whereIn('subcategory_id', $ids)->featured()->take(4)->get();

        return view('pages.cerdos')->with([
            'featured' => $products
        ]);
    }
}
