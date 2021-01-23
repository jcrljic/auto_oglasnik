

@extends('layouts.app')



@section('content')
<a href="{{ route('messages.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">message_body</th>
      <th scope="col">from_id</th>
      <th scope="col">to_id</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($messages as $message)
    <tr>
           <td>{{$message->id}}</td>
           <td>{{$message->message_body}}</td>
           <td>{{$message->from_id}}</td>
           <td>{{$message->to_id}}</td>
           <td>
            <a class="btn btn-outline-primary" href="{{route('messages.show',['message' => $message->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('messages.edit',['message' => $message->id]) }}">Edit</a>

           </td>
         
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


