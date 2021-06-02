<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSubcategory;
use App\Models\Subcategory;


class WebController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'ASC')->paginate(12);
        return view('pages.store.index', compact('products'));
    }

    public function subcategoryIndex($subcategoryId)
    {
        $products = Subcategory::find($subcategoryId)->products()->paginate(12);
        return view('pages.store.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::with('subcategory.category')->findOrFail($id);
        $subcategoryIds = $product->subcategory->pluck('id');
        $relatedProductsIds = ProductSubcategory::whereIn('subcategory_id', $subcategoryIds)->get()->unique('product_id')->pluck('product_id');
        $relatedProducts = Product::whereIn('id', $relatedProductsIds)->get();

        return view('pages.store.show', compact('product', 'relatedProducts'));
    }
    public function contact(Request $request)
    {
        $details = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'type' => $request->type,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        \Mail::to('asaldivia1994@gmail.com')->send(new \App\Mail\ContactMail($details));

        //toastr()->success('Successful Send');
        return redirect()->back();
    }
}
