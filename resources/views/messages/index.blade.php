

@extends('layouts.app')



@section('content')
<a href="{{ route('Messages.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">message_body</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach ($messages as $message)
    <tr>
           <td>{{$message->id}}</td>
           <td>{{$message->message_body}}</td>
           <td>
            <a class="btn btn-outline-primary" href="{{route('Messages.show',['Message' => $message->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('Messages.edit',['Message' => $message->id]) }}">Edit</a>

           </td>
         
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


