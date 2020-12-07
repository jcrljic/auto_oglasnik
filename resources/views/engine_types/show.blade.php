@extends('layouts.app')



@section('content')
<div>
   <h3>engine type detail </h3>
   <ul class="list-unstyled">
       <li>Name: {{ $engine_type->name}}</li>
       
     </ul>


       <a href="{{ route('engine_types.index') }}" class="btn btn-outline-primary">Back</a>



   </div>

@endsection
