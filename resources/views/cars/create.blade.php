@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('cars.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- country name -->
        <div class="form-group">
            <label for="make">Make</label>
            <input value="{{ @old('make') }}" name="make" type="text" class="form-control" id="make">
            @if ($errors->has('make'))
                <span class="text-danger">{{ $errors->first('make') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input value="{{ @old('model') }}" name="model" type="text" class="form-control" id="model">
            @if ($errors->has('model'))
                <span class="text-danger">{{ $errors->first('model') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="first_registration">First registration</label>
            <input value="{{ @old('first_registration') }}" name="first_registration" type="date" class="form-control" id="first_registration">
            @if ($errors->has('first_registration'))
                <span class="text-danger">{{ $errors->first('first_registration') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input value="{{ @old('price') }}" name="price" type="text" class="form-control" id="price">
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="kilometer">Kilometer</label>
            <input value="{{ @old('kilometer') }}" name="kilometer" type="text" class="form-control" id="kilometer">
            @if ($errors->has('kilometer'))
                <span class="text-danger">{{ $errors->first('kilometer') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="power">Power</label>
            <input value="{{ @old('power') }}" name="power" type="text" class="form-control" id="power">
            @if ($errors->has('power'))
                <span class="text-danger">{{ $errors->first('power') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="cubic_capacity">Cubic capacity</label>
            <input value="{{ @old('cubic_capacity') }}" name="cubic_capacity" type="text" class="form-control" id="cubic_capacity">
            @if ($errors->has('cubic_capacity'))
                <span class="text-danger">{{ $errors->first('cubic_capacity') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="colour">Colour</label>
            <input value="{{ @old('colour') }}" name="colour" type="text" class="form-control" id="colour">
            @if ($errors->has('colour'))
                <span class="text-danger">{{ $errors->first('colour') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="interior_features">Interior features</label>
            <input value="{{ @old('interior_features') }}" name="interior_features" type="text" class="form-control" id="interior_features">
            @if ($errors->has('interior_features'))
                <span class="text-danger">{{ $errors->first('interior_features') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="vin_number">Vin number</label>
            <input value="{{ @old('vin_number') }}" name="vin_number" type="text" class="form-control" id="vin_number">
            @if ($errors->has('vin_number'))
                <span class="text-danger">{{ $errors->first('vin_number') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="lat">Lat</label>
            <input value="{{ @old('lat') }}" name="lat" type="text" class="form-control" id="lat">
            @if ($errors->has('lat'))
                <span class="text-danger">{{ $errors->first('lat') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="lng">Lng</label>
            <input value="{{ @old('lng') }}" name="lng" type="text" class="form-control" id="lng">
            @if ($errors->has('lng'))
                <span class="text-danger">{{ $errors->first('lng') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="vehicle_type_id">Vehice Type</label>
            <input value="{{ @old('vehicle_type_id') }}" name="vehicle_type_id" type="number" class="form-control" id="vehicle_type_id">
            @if ($errors->has('vehicle_type_id'))
                <span class="text-danger">{{ $errors->first('vehicle_type_id') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="engine_type_id">Engine type</label>
            <input value="{{ @old('engine_type_id') }}" name="engine_type_id" type="number" class="form-control" id="engine_type_id">
            @if ($errors->has('engine_type_id'))
                <span class="text-danger">{{ $errors->first('engine_type_id') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="transmission_type_id">Transmission type</label>
            <input value="{{ @old('transmission_type_id') }}" name="transmission_type_id" type="number" class="form-control" id="transmission_type_id">
            @if ($errors->has('transmission_type_id'))
                <span class="text-danger">{{ $errors->first('transmission_type_id') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="owner_id">Owner</label>
            <input value="{{ @old('owner_id') }}" name="owner_id" type="number" class="form-control" id="owner_id">
            @if ($errors->has('owner_id'))
                <span class="text-danger">{{ $errors->first('owner_id') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input value="{{ @old('location') }}" name="location" type="text" class="form-control" id="location">
            @if ($errors->has('location'))
                <span class="text-danger">{{ $errors->first('location') }}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('cars.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection