@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('cars.update', ['car' => $car->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- country name -->
        <div class="form-group">
            <label for="make">Make</label>
            <input value="{{ $car->make }}" name="make" type="text" class="form-control" id="make">
            @if ($errors->has('make'))
                <span class="text-danger">{{ $errors->first('make') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input value="{{ $car->model }}" name="model" type="text" class="form-control" id="model">
            @if ($errors->has('model'))
                <span class="text-danger">{{ $errors->first('model') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="first_registration">First registration</label>
            <input value="{{ $car->first_registration }}" name="first_registration" type="date" class="form-control" id="first_registration">
            @if ($errors->has('first_registration'))
                <span class="text-danger">{{ $errors->first('first_registration') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input value="{{$car->price }}" name="price" type="text" class="form-control" id="price">
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="kilometer">Kilometer</label>
            <input value="{{ $car->kilometer }}" name="kilometer" type="text" class="form-control" id="kilometer">
            @if ($errors->has('kilometer'))
                <span class="text-danger">{{ $errors->first('kilometer') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="power">Power</label>
            <input value="{{$car->power }}" name="power" type="text" class="form-control" id="power">
            @if ($errors->has('power'))
                <span class="text-danger">{{ $errors->first('power') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="cubic_capacity">Cubic capacity</label>
            <input value="{{ $car->cubic_capacity }}" name="cubic_capacity" type="text" class="form-control" id="cubic_capacity">
            @if ($errors->has('cubic_capacity'))
                <span class="text-danger">{{ $errors->first('cubic_capacity') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="colour">Colour</label>
            <input value="{{$car->colour }}" name="colour" type="text" class="form-control" id="colour">
            @if ($errors->has('colour'))
                <span class="text-danger">{{ $errors->first('colour') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="interior_features">Interior features</label>
            <input value="{{ $car->interior_features }}" name="interior_features" type="text" class="form-control" id="interior_features">
            @if ($errors->has('interior_features'))
                <span class="text-danger">{{ $errors->first('interior_features') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="vin_number">Vin number</label>
            <input value="{{ $car->vin_number }}" name="vin_number" type="text" class="form-control" id="vin_number">
            @if ($errors->has('vin_number'))
                <span class="text-danger">{{ $errors->first('vin_number') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="lat">Lat</label>
            <input value="{{ $car->lat }}" name="lat" type="text" class="form-control" id="lat">
            @if ($errors->has('lat'))
                <span class="text-danger">{{ $errors->first('lat') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="lng">Lng</label>
            <input value="{{ $car->lng }}" name="lng" type="text" class="form-control" id="lng">
            @if ($errors->has('lng'))
                <span class="text-danger">{{ $errors->first('lng') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="vehicle_type_id">Vehice Type</label>
            {{ Form::select('vehicle_type_id', $vehicle_types, $car->vehicle_type_id, ['class' => 'form-control', 'id' => 'vehicle_type'])}}
        </div>
        <div class="form-group">
            <label for="engine_type_id">Engine type</label>
            {{ Form::select('engine_type_id', $engine_types, $car->engine_type_id, ['class' => 'form-control', 'id' => 'engine_type'])}}
        </div>
        <div class="form-group">
            <label for="transmission_type_id">Transmission type</label>
            {{ Form::select('transmission_type_id', $transmission_types, $car->transmission_type_id, ['class' => 'form-control', 'id' => 'transmission_type'])}}
        </div>
        <div class="form-group">
            <label for="owner_id">Owner</label>
            <input value="{{ $car->owner_id }}" name="owner_id" type="number" class="form-control" id="owner_id">
            @if ($errors->has('owner_id'))
                <span class="text-danger">{{ $errors->first('owner_id') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input value="{{ $car->location }}" name="location" type="text" class="form-control" id="location">
            @if ($errors->has('location'))
                <span class="text-danger">{{ $errors->first('location') }}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('cars.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection