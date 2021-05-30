<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.products.index')->with('products', Product::all());
    }

    public function show(Product $product)
    {
        return view('pages.products.show')->with('product', $product);
    }

    public function create()
    {
        $subcategories = array(
            '' => 'Seleccione',
             __('categories.birds') => Subcategory::birds()->pluck('name', 'id'),
            __('categories.pigs') => Subcategory::pigs()->pluck('name', 'id'),
        );
        return view('pages.products.create')->with([
            'subcategories' => $subcategories,
            'verb' => __('products.create')
            ]);
    }
    
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'subcategory_id' => $request->input('subcategory_id'),
            'featured' => 0,
        ]);

        return redirect()->route('products.index');
    }

    public function edit(Request $request, Product $product)
    {
        $subcategories = array(
            __('categories.birds') => Subcategory::birds()->pluck('name', 'id'),
            __('categories.pigs') => Subcategory::pigs()->pluck('name', 'id'),
        );

        return view('pages.products.edit')
            ->with([
                'subcategories' => $subcategories,
                'product' => $product,
                'verb' => __('products.edit')
            ]);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.index');
    }

    public function delete(Request $request, Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
