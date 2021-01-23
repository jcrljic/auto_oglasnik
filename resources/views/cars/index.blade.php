

@extends('layouts.app')



@section('content')
<a href="{{ route('cars.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">first_registration</th>
      <th scope="col">price</th>
      <th scope="col">kilometer</th>
      <th scope="col">power</th>
      <th scope="col">cubic_capacity</th>
      <th scope="col">colour</th>
      <th scope="col">interior_features</th>
      <th scope="col">make</th>
      <th scope="col">model</th>
      <th scope="col">vin_number</th>
      <th scope="col">location</th>
      <th scope="col">lat</th>
      <th scope="col">lng</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">Engine Type</th>
      <th scope="col">Transmission Type</th>
      <th scope="col">Owner</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>
  <tbody>
  @foreach ($cars as $car)
    <tr>
           <td>{{$car->id}}</td>
           <td>{{$car->first_registration}}</td>
           <td>{{$car->price}}</td>
           <td>{{$car->kilometer}}</td>
           <td>{{$car->power}}</td>
           <td>{{$car->cubic_capacity}}</td>
           <td>{{$car->colour}}</td>
           <td>{{$car->interior_features}}</td>
           <td>{{$car->make}}</td>
           <td>{{$car->model}}</td>
           <td>{{$car->vin_number}}</td>
           <td>{{$car->location}}</td>
           <td>{{$car->lat}}</td>
           <td>{{$car->lng}}</td>
           <td>{{$car->vehicle_type->name??''}}</td>
           <td>{{$car->engine_type->name??''}}</td>
           <td>{{$car->transmission_type->name??''}}</td>
           <td>{{$car->owner_id}}</td>
           <td>
            <a class="btn btn-outline-primary" href="{{route('cars.show',['car' => $car->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('cars.edit',['car' => $car->id]) }}">Edit</a>

           </td>
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


