<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\engine_type;

class Engine_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $engine_types = engine_type::paginate();
        return view('engine_types.index',compact('engine_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('engine_types.create');
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
            'name' => 'required|max:255',
            
        ]);
        $engine_type = Engine_type::create($validated);
        return view('engine_types.show', compact('engine_type'));
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
        $engine_type = Engine_type::findOrFail($id);
        return view('engine_types.show',compact('engine_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $engine_type = Engine_type::findOrFail($id);
        return view('engine_types.edit',compact('engine_type'));
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
            'name' => 'required|max:255',
            
        ]);
        $engine_type = Engine_type::findOrFail($id);
        $engine_type->fill($validated);
        $engine_type->save();
        return view('engine_types.show', compact('engine_type'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Engine_type::destroy($id);
 
        return redirect()->route('engine_types.index');
    }
}
