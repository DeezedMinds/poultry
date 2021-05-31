<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('pages.categories.index')->with('categories', Category::all());
    }

    public function show(Category $category)
    {
        return view('pages.categories.show')->with('category', $category);
    }

    public function create()
    {
        return view('pages.categories.create')->with([
            'verb' => __('actions.create'),
            'groups' => collect(Category::GROUPS)->slice(1)
        ]);
    }
    
    public function store(Request $request)
    {
        $payload = [
            'name' => $request->input('name'),
            'group_id' => $request->input('group_id'),
        ];

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo');
            $imageName = time() . '.' . $imagePath->getClientOriginalExtension();
       
            $path = $request->file('photo')->storeAs('uploads/categories/' . \Auth::id(), $imageName, 'public');
            $payload = array_merge($payload, ['image' => '/storage/' . $path]);
         };

        $category = Category::create($payload);

        return redirect()->route('categories.show', $category->id);
    }

    public function edit(Category $category)
    {
        return view('pages.categories.edit')
            ->with([
                'verb' => __('actions.edit'),
                'category' => $category,
                'groups' => collect(Category::GROUPS)->slice(1)
            ]);
    }

    public function update(Request $request, Category $category)
    {
        $payload = [
            'name' => $request->input('name'),
            'group_id' => $request->input('group_id')
        ];

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo');
            $imageName = time() . '.' . $imagePath->getClientOriginalExtension();
            $path = $request->file('photo')->storeAs('uploads/categories/' . \Auth::id(), $imageName, 'public');
            $payload = array_merge($payload, ['image' => '/storage/' . $path]);
         };

        $category->update($payload);

        return redirect()->route('categories.index');
    }

    public function delete(Request $request, Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
