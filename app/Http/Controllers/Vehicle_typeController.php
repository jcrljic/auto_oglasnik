<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle_type;

class Vehicle_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle_types = Vehicle_type::paginate();
        return view('vehicle_types.index',compact('vehicle_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicle_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:vehicle_types|max:255',
        ]);
        $vehicle_type = Vehicle_type::create($validated);
        return view('vehicle_types.show', compact('vehicle_type'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle_type = Vehicle_type::findOrFail($id);
        return view('vehicle_types.show',compact('vehicle_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle_type = Vehicle_type::findOrFail($id);
        return view('vehicle_types.edit',compact('vehicle_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:vehicle_types|max:255',
        ]);
        $vehicle_type = Vehicle_type::findOrFail($id);
        $vehicle_type->fill($validated);
        $vehicle_type->save();
        return view('vehicle_types.show', compact('vehicle_type'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vehicle_type::destroy($id);
 
        return redirect()->route('vehicle_types.index');    
    }
}
