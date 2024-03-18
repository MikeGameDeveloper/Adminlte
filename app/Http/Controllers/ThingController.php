<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreThingRequest;
use App\Http\Requests\UpdateThingRequest;

class ThingController extends Controller
{
    public function index():View
    {
        $things = Thing::all();
        return view('admin.things.index', ['things' => $things]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('admin.things.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreThingRequest $request):RedirectResponse
    {
        Thing::create($request->all());
        return redirect()->back()->with('success', 'Inregistrare cu success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Thing $thing):View
    {
        return view('admin.things.show', ['thing' => $thing]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thing $thing):View
    {
        return view('admin.things.edit', ['thing' => $thing]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatethingRequest $request, Thing $thing):RedirectResponse
    {
        $thing->update($request->all());

        return redirect()->back()->with('success', 'Actualizare cu success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id):RedirectResponse
    {  
        $thing = Thing::findOrFail($id);
        $thing->delete();
        return redirect()->back()->with('success', 'Stergere cu success!');
    }
}
