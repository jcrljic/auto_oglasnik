

@extends('layouts.app')



@section('content')
<div>
   <h3>Message detail </h3>
   <ul class="list-unstyled">
       <li>Message body: {{ $message->message_body}}</li>
      
      
     </ul>


       <a href="{{ route('messages.index') }}" class="btn btn-outline-primary">Back</a>
       <a class="btn btn-outline-primary" href="{{route('messages.edit',['message' => $message->id]) }}">Edit</a>
       <form class="form-inline" action="{{ route('messages.destroy', ['message' => $message->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>



   </div>

@endsection


