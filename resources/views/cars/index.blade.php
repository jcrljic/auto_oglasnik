

@extends('layouts.app')



@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">first_registration</th>
      <th scope="col">price</th>
      <th scope="col">kilometer</th>
      <th scope="col">power</th>
      <th scope="col">cubic_capaticy</th>
      <th scope="col">colour</th>
      <th scope="col">interior_features</th>
      <th scope="col">make</th>
      <th scope="col">model</th>
      <th scope="col">vin_number</th>
      <th scope="col">location</th>
      <th scope="col">lat</th>
      <th scope="col">lng</th>
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
           <td>{{$car->cubic_capaticy}}</td>
           <td>{{$car->colour}}</td>
           <td>{{$car->interior_features}}</td>
           <td>{{$car->make}}</td>
           <td>{{$car->model}}</td>
           <td>{{$car->vin_number}}</td>
           <td>{{$car->location}}</td>
           <td>{{$car->lat}}</td>
           <td>{{$car->lng}}</td>
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


