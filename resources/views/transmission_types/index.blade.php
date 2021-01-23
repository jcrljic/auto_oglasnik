

@extends('layouts.app')



@section('content')
<a href="{{ route('transmission_types.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($transmission_types as $transmission_type)
    <tr>
           <td>{{$transmission_type->id}}</td>
           <td>{{$transmission_type->name}}</td>
           <td>
            <a class="btn btn-outline-primary" href="{{route('transmission_types.show',['transmission_type' => $transmission_type->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('transmission_types.edit',['transmission_type' => $transmission_type->id]) }}">Edit</a>

           </td>
          
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


