

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
  @foreach ($engine_types as $engine_type)
    <tr>
           <td>{{$engine_type->id}}</td>
           <td>{{$engine_type->name}}</td>
     
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


