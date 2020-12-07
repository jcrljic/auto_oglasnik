

@extends('layouts.app')



@section('content')
<a href="{{ route('engine_types.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach ($engine_types as $engine_type)
    <tr>
           <td>{{$engine_type->id}}</td>
           <td>{{$engine_type->name}}</td>
           <td>
            <a class="btn btn-outline-primary" href="{{route('engine_types.show',['engine_type' => $engine_type->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('engine_types.edit',['engine_type' => $engine_type->id]) }}">Edit</a>

           </td>
     
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


