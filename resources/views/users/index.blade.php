

@extends('layouts.app')
@php
$loggedInUser = \Auth::user();
@endphp


@section('content')
<a href="{{ route('users.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">email</th>
      <th scope="col">last_online</th>
      <th scope="col">phone_number</th>
      <th scope="col">role</th>
      <th scope="col">Actions</th>

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
           <td>{{$user->role->name??''}}</td>
           <td>
            <a class="btn btn-outline-primary" href="{{route('users.show',['user' => $user->id]) }}">Details</a>
             <!-- admin svima mijenja password, korisnik samo sebi -->
        @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
            <a class="btn btn-outline-primary" href="{{route('users.edit',['user' => $user->id]) }}">Edit</a>
            <a class="btn btn-outline-primary" href="{{route('change_password.edit',['user' => $user->id]) }}">Change Password</a>
            @endif

           </td>
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


