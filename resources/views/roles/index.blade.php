

@extends('layouts.app')



@section('content')
<a href="{{ route('roles.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($roles as $role)
    <tr>
           <td>{{$role->id}}</td>
           <td>{{$role->name}}</td>
           <td>
            <a class="btn btn-outline-primary" href="{{route('roles.show',['role' => $role->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('roles.edit',['role' => $role->id]) }}">Edit</a>

           </td>
         
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


