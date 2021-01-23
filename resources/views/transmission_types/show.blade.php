

@extends('layouts.app')



@section('content')
<div>
   <h3>Transmission type details</h3>
   <ul class="list-unstyled">
       <li>Name: {{ $transmission_type->name}}</li>
       
     </ul>


       <a href="{{ route('transmission_types.index') }}" class="btn btn-outline-primary">Back</a>
       <a class="btn btn-outline-primary" href="{{route('transmission_types.edit',['transmission_type' => $transmission_type->id]) }}">Edit</a>
       <form class="form-inline" action="{{ route('transmission_types.destroy', ['transmission_type' => $transmission_type->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>



   </div>

@endsection


