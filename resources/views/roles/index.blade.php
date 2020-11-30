

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
  @foreach ($roles as $role)
    <tr>
           <td>{{$role->id}}</td>
           <td>{{$role->name}}</td>
         
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


