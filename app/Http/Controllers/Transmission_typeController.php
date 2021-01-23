<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transmission_type;
class Transmission_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transmission_types = Transmission_type::paginate();
        return view('transmission_types.index',compact('transmission_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transmission_types.create');
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
            'name' => 'required|unique:transmission_types|max:255',
        ]);
        $transmission_type = Transmission_type::create($validated);
        return view('transmission_types.show', compact('transmission_type'));
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
        $transmission_type = Transmission_type::findOrFail($id);
        return view('transmission_types.show',compact('transmission_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transmission_type = Transmission_type::findOrFail($id);
        return view('transmission_types.edit',compact('transmission_type'));
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
            'name' => 'required|unique:transmission_types|max:255',
        ]);
        $transmission_type = Transmission_type::findOrFail($id);
        $transmission_type->fill($validated);
        $transmission_type->save();
        return view('transmission_types.show', compact('transmission_type'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transmission_type::destroy($id);
 
        return redirect()->route('transmission_types.index'); 
    }
}
