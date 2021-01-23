

@extends('layouts.app')



@section('content')
<a href="{{ route('vehicle_types.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($vehicle_types as $vehicle_type)
    <tr>
           <td>{{$vehicle_type->id}}</td>
           <td>{{$vehicle_type->name}}</td>
           <td>
            <a class="btn btn-outline-primary" href="{{route('vehicle_types.show',['vehicle_type' => $vehicle_type->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('vehicle_types.edit',['vehicle_type' => $vehicle_type->id]) }}">Edit</a>

           </td>
       
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


