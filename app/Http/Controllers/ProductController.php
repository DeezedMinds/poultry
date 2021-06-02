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
             __('categories.birds') => Subcategory::birds()->get()->pluck('full_name', 'id'),
            __('categories.pigs') => Subcategory::pigs()->pluck('name', 'id'),
        );
        return view('pages.products.create')->with([
            'subcategories' => $subcategories,
            'verb' => __('actions.create')
            ]);
    }
    
    public function store(Request $request)
    {
        $payload = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'featured' => $request->input('featured') ? $request->input('featured') : false
        ];

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo');
            $imageName = time() . '.' . $imagePath->getClientOriginalExtension();
       
            $path = $request->file('photo')->storeAs('uploads/products/' . \Auth::id(), $imageName, 'public');
            $payload = array_merge($payload, ['image' => '/storage/' . $path]);
         };

        $product = Product::create($payload);
        $product->subcategory()->sync($request->input('subcategory_id'));

        return redirect()->route('products.show', $product->id);
    }

    public function edit(Request $request, Product $product)
    {
        $subcategories = array(
            __('categories.birds') => Subcategory::birds()->get()->pluck('full_name', 'id'),
            __('categories.pigs') => Subcategory::pigs()->pluck('name', 'id'),
        );

        return view('pages.products.edit')
            ->with([
                'subcategories' => $subcategories,
                'selected_subcategories' => $product->subcategory->pluck('id')->toArray(),
                'product' => $product,
                'verb' => __('actions.edit')
            ]);
    }

    public function update(Request $request, Product $product)
    {
        $payload = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'featured' => $request->input('featured') ? $request->input('featured') : false,
        ];

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo');
            $imageName = time() . '.' . $imagePath->getClientOriginalExtension();
            $path = $request->file('photo')->storeAs('uploads/products/' . \Auth::id(), $imageName, 'public');
            $payload = array_merge($payload, ['image' => '/storage/' . $path]);
         };

        $product->update($payload);
        $product->subcategory()->sync($request->input('subcategory_id'));

        return redirect()->route('products.show', $product->id);
    }

    public function delete(Request $request, Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }

    public function feature(Request $request, Product $product)
    {
        $product->featured = !$product->featured;
        $product->save();

        return redirect()->route('products.index');
    }
}
