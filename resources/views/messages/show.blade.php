

@extends('layouts.app')



@section('content')
<div>
   <h3>Message detail </h3>
   <ul class="list-unstyled">
       <li>Message body: {{ $Message->message_body}}</li>
      
      
     </ul>


       <a href="{{ route('Messages.index') }}" class="btn btn-outline-primary">Back</a>



   </div>

@endsection


