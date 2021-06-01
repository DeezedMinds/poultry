<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class WebController extends Controller
{
    public function indexProducts()
    {
        $products = Product::orderBy('id', 'ASC')->paginate(12);
        return view('pages.store.index', compact('products'));
    }
    public function showProduct($id)
    {
        $product = Product::with('subcategory.category')->findOrFail($id);
        $relatedProducts = Product::with('subcategory.category')->where('subcategory_id', '=', $product->subcategory_id)->orderBy('name', 'ASC')->get();

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
