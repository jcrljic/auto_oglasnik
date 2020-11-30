

@extends('layouts.app')



@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($vehicle_types as $vehicle_type)
    <tr>
           <td>{{$vehicle_type->id}}</td>
           <td>{{$vehicle_type->name}}</td>
       
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


