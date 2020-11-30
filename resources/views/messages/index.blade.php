

@extends('layouts.app')



@section('content')
<table class="table table-striped">
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
         
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


