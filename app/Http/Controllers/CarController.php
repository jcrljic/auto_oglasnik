<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Engine_type;
use App\Transmission_type;
use App\Vehicle_type;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::with(['vehicle_type','engine_type','transmission_type'])->paginate();
        return view('cars.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
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
            'first_registration' => 'required|date',
            'price' => 'required|max:255',
            'kilometer' => 'required|max:255',
            'power' => 'required|max:255',
            'cubic_capacity' => 'required|max:255',
            'colour' => 'required|max:255',
            'interior_features' => 'required|max:255',
            'make' => 'required|max:255',
            'model' => 'required|max:255',
            'vin_number' => 'required|max:255',
            'location' => 'required|max:255',
            'lat' => 'required|max:255',
            'lng' => 'required|max:255',
            'vehicle_type_id' => 'required|max:255',
            'engine_type_id' => 'required|max:255',
            'transmission_type_id' => 'required|max:255',
            'owner_id' => 'required|max:255',  
        ]);

        $car = Car::create($validated);
        return view('cars.show', compact('car'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show',compact('car'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        $transmission_types = Transmission_type::pluck('name', 'id');

        $engine_types = Engine_type::pluck('name', 'id');
        $vehicle_types = Vehicle_type::pluck('name', 'id');
        return view('cars.edit',compact('car','engine_types','transmission_types','vehicle_types'));

        
        
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
            'first_registration' => 'required|date',
            'price' => 'required|max:255',
            'kilometer' => 'required|max:255',
            'power' => 'required|max:255',
            'cubic_capacity' => 'required|max:255',
            'colour' => 'required|max:255',
            'interior_features' => 'required|max:255',
            'make' => 'required|max:255',
            'model' => 'required|max:255',
            'vin_number' => 'required|max:255',
            'location' => 'required|max:255',
            'lat' => 'required|max:255',
            'lng' => 'required|max:255',
            'vehicle_type_id' => 'required|max:255',
            'engine_type_id' => 'required|max:255',
            'transmission_type_id' => 'required|max:255',
            'owner_id' => 'required|max:255',  
        ]);

        $car = Car::findOrFail($id);
        $car->fill($validated);
        $car->save();
        return view('cars.show', compact('car'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);
 
        return redirect()->route('cars.index');    }
    }

