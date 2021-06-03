<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        return view('pages.resources.index')->with([
            'resources' => Resource::all()
        ]);
    }

    public function show(Resource $resource)
    {
        return view('pages.resources.show')->with('resource', $resource);
    }

    public function create()
    {
        return view('pages.resources.create')
            ->with([
                'verb' => __('actions.create')
            ]);
    }
    
    public function store(Request $request)
    {
        $payload = [
            'name' => $request->input('name')
        ];

        if ($request->hasFile('pdf')) {
            $pdfName = time() . '.pdf';
       
            $path = $request->file('pdf')->storeAs('uploads/resources/' . \Auth::id(), $pdfName, 'public');
            $payload = array_merge($payload, ['pdf' => '/storage/' . $path]);
         };

        $resource = Resource::create($payload);

        return redirect()->route('resources.show', $resource->id);
    }

    public function edit(Request $request, Resource $resource)
    {
        return view('pages.resources.edit')
            ->with([
                'verb' => __('actions.edit'),
                'resource' => $resource
            ]);
    }

    public function update(Request $request, Resource $resource)
    {
        $payload = [
            'name' => $request->input('name')
        ];

        if ($request->hasFile('pdf')) {
            $pdfName = time() . '.pdf';
       
            $path = $request->file('pdf')->storeAs('uploads/resources/' . \Auth::id(), $pdfName, 'public');
            $payload = array_merge($payload, ['pdf' => '/storage/' . $path]);
         };

        $resource->update($payload);

        return redirect()->route('resources.show', $resource->id);
    }

    public function delete(Request $request, Resource $resource)
    {
        $resource->delete();
        return redirect()->route('resources.index');
    }

}
