

@extends('layouts.app')



@section('content')
<div>
   <h3>Car detail </h3>
   <ul class="list-unstyled">
       <li>First registration: {{ $car->first_registration}}</li>
       <li>Price: {{ $car->price}}</li>
       <li>Kilometer: {{ $car->kilometer}}</li>
       <li>Power: {{ $car->power}}</li>
       <li>Cubic capaticy: {{ $car->cubic_capaticy}}</li>
       <li>Colour: {{ $car->colour}}</li>
       <li>Interior_features: {{ $car->interior_features}}</li>
       <li>Make: {{ $car->make}}</li>
       <li>Model: {{ $car->model}}</li>
       <li>Vin number: {{ $car->vin_number}}</li>
       <li>Lat: {{ $car->lat}}</li>
       <li>Lng: {{ $car->lng}}</li>
     </ul>


       <a href="{{ route('cars.index') }}" class="btn btn-outline-primary">Back</a>



   </div>

@endsection


