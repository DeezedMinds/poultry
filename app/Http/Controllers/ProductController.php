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
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo');
            $imageName = time() . '.' . $imagePath->getClientOriginalExtension();
       
            $path = $request->file('photo')->storeAs('uploads/products/' . \Auth::id(), $imageName, 'public');
         };

        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'subcategory_id' => $request->input('subcategory_id'),
            'featured' => $request->input('featured') ? $request->input('featured') : false,
            'image' => '/storage/' . $path,
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
        $payload = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'subcategory_id' => $request->input('subcategory_id'),
            'featured' => $request->input('featured') ? $request->input('featured') : false,
        ];

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo');
            $imageName = time() . '.' . $imagePath->getClientOriginalExtension();
            $path = $request->file('photo')->storeAs('uploads/products/' . \Auth::id(), $imageName, 'public');
            $payload = array_merge($payload, ['image' => '/storage/' . $path]);
         };

        $product->update($payload);

        return redirect()->route('products.index');
    }

    public function delete(Request $request, Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
