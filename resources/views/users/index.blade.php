

@extends('layouts.app')



@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">email</th>
      <th scope="col">last_online</th>
      <th scope="col">phone_numberr</th>
      <th scope="col">password</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    <tr>
           <td>{{$user->id}}</td>
           <td>{{$user->first_name}}</td>
           <td>{{$user->last_name}}</td>
           <td>{{$user->email}}</td>
           <td>{{$user->last_online}}</td>
           <td>{{$user->phone_number}}</td>
           <td>{{$user->password}}</td>
     
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


