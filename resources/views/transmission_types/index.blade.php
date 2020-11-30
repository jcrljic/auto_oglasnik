

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
  @foreach ($transmission_types as $transmission_type)
    <tr>
           <td>{{$transmission_type->id}}</td>
           <td>{{$transmission_type->name}}</td>
          
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


