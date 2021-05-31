<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;


class SubcategoryController extends Controller
{
    public function index()
    {
        return view('pages.subcategories.index')->with('subcategories', Subcategory::all());
    }

    public function show(Subcategory $subcategory)
    {
        return view('pages.subcategories.show')->with('subcategory', $subcategory);
    }

    public function create()
    {
        $categories = array(
            __('categories.birds') => Category::birds()->pluck('name', 'id'),
            __('categories.pigs') => Category::pigs()->pluck('name', 'id'),
        );
        return view('pages.subcategories.create')->with([
            'categories' => $categories,
            'verb' => __('actions.create')
            ]);
    }
    
    public function store(Request $request)
    {
        $payload = [
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
        ];

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo');
            $imageName = time() . '.' . $imagePath->getClientOriginalExtension();
       
            $path = $request->file('photo')->storeAs('uploads/subcategories/' . \Auth::id(), $imageName, 'public');
            $payload = array_merge($payload, ['image' => '/storage/' . $path]);
         };

        $subcategory = Subcategory::create($payload);

        return redirect()->route('subcategories.show', $subcategory->id);
    }

    public function edit(Subcategory $subcategory)
    {
        $categories = array(
            __('categories.birds') => Category::birds()->pluck('name', 'id'),
            __('categories.pigs') => Category::pigs()->pluck('name', 'id'),
        );
        return view('pages.subcategories.edit')
            ->with([
                'verb' => __('actions.edit'),
                'categories' => $categories,
                'subcategory' => $subcategory
            ]);
    }

    public function update(Request $request, Subcategory $subcategory)
    {
        $payload = [
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id')
        ];

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo');
            $imageName = time() . '.' . $imagePath->getClientOriginalExtension();
            $path = $request->file('photo')->storeAs('uploads/subcategories/' . \Auth::id(), $imageName, 'public');
            $payload = array_merge($payload, ['image' => '/storage/' . $path]);
         };

        $subcategory->update($payload);

        return redirect()->route('subcategories.index');
    }

    public function delete(Request $request, Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategories.index');
    }
}
