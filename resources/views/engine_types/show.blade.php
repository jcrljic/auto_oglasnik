@extends('layouts.app')



@section('content')
<div>
   <h3>engine type detail </h3>
   <ul class="list-unstyled">
       <li>Name: {{ $engine_type->name}}</li>
       
     </ul>


       <a href="{{ route('engine_types.index') }}" class="btn btn-outline-primary">Back</a>
       <a class="btn btn-outline-primary" href="{{route('engine_types.edit',['engine_type' => $engine_type->id]) }}">Edit</a>
       <form class="form-inline" action="{{ route('engine_types.destroy', ['engine_type' => $engine_type->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>



   </div>

@endsection
